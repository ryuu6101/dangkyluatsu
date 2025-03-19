<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Degrees\DegreeRepositoryInterface;
use App\Repositories\Documents\DocumentRepositoryInterface;
use App\Repositories\Attachments\AttachmentRepositoryInterface;
use App\Repositories\FamilyMembers\FamilyMemberRepositoryInterface;
use App\Repositories\WorkingRecords\WorkingRecordRepositoryInterface;
use App\Repositories\AttachmentFiles\AttachmentFileRepositoryInterface;

class RegisterController extends Controller
{
    protected $degreeRepos;
    protected $documentRepos;
    protected $familyMemberRepos;
    protected $workingRecordRepos;
    protected $attachmentRepos;
    protected $attachmentFileRepos;

    public $attachments_list = [
        1 => [
            'Giấy xác nhận của tổ chức hành nghề luật sư về việc nhận tập sự',
            'Bản sao giấy chứng nhận tốt nghiệp đào tạo nghề Luật sư',
            'Giấy tờ chứng minh thuộc trường hợp được giảm thời gian tập sự hành nghề luật sư (không bắt buộc)',
            'Sơ yếu lí lịch có xác nhận của địa phương (không bắt buộc)',
            'Quyết định thôi cán bộ công chức (không bắt buộc)',
            'Bằng cử nhân luật hoặc Bằng thạc sỹ luật (Bản sao)',
        ],
        2 => [
            'Bản sao chứng chỉ hành nghề luật sư',
            'Phiếu lý lịch tư pháp (Trường hợp chứng chỉ hành nghề luật sư quá 6 tháng) (không bắt buộc)',
            'Bản sao Quyết định nghỉ hưu hoặc Giấy xác nhận không phải là công chức (không bắt buộc)',
        ],
    ];

    public function __construct(
        DegreeRepositoryInterface $degreeRepos,
        DocumentRepositoryInterface $documentRepos,
        FamilyMemberRepositoryInterface $familyMemberRepos,
        WorkingRecordRepositoryInterface $workingRecordRepos,
        AttachmentRepositoryInterface $attachmentRepos,
        AttachmentFileRepositoryInterface $attachmentFileRepos,
    ) {
        $this->degreeRepos = $degreeRepos;
        $this->documentRepos = $documentRepos;
        $this->familyMemberRepos = $familyMemberRepos;
        $this->workingRecordRepos = $workingRecordRepos;
        $this->attachmentRepos = $attachmentRepos;
        $this->attachmentFileRepos = $attachmentFileRepos;
    }

    public function intern_register() {
        return view('web.sections.document-form.index')->with([
            'title' => 'Đăng ký thực tập',
            'form' => 'intern-register',
            'attachments' => $this->attachments_list[1],
        ]);
    }

    public function member_register($option) {
        if ($option == 'da-co-tai-khoan') return redirect()->route('user-login.index')->with('member_register', 1);

        if ($option == 'luat-su-moi') $secondary_form = 'card-issued';
        elseif ($option == 'luat-su-chuyen-tu-doan-khac-ve') $secondary_form = 'card-exchange';
        else return abort(404);

        return view('web.sections.document-form.index')->with([
            'title' => 'Đăng ký gia nhập đoàn luật sư',
            'form' => 'member-register',
            'option' => $option,
            'secondary_form' => $secondary_form,
            'attachments' => $this->attachments_list[2],
        ]);
    }

    public function intern_register_post(Request $request) {
        // dd($request->all());
        $params = $request->all();
        unset($params['_method']);
        unset($params['_token']);

        $document = $this->document_create($params);

        if (!$document) {
            return redirect()->route('home')->with('noty', [
                'type' => 'error',
                'message' => 'Đã xảy ra lỗi',
            ]);
        }

        return redirect()->route('home')->with('noty', [
            'type' => 'success',
            'message' => 'Nộp đơn đăng ký tập sự thành công',
        ]);
    }

    public function member_register_post(Request $request) {
        // dd($request->all());
        $params = $request->all();
        unset($params['_method']);
        unset($params['_token']);

        if (isset($params['secondary_form'])) {
            $secondary_params = $params['secondary_form'];
            $secondary_params['portrait_pic'] = $params['portrait_pic'];
            unset($params['secondary_form']);
        }

        if ($request->input('return_back')) {
            $redirect = redirect()->back();
        } else {
            $redirect = redirect()->route('home');
        }

        $document = $this->document_create($params);

        if (!$document) {
            return $redirect->with('noty', [
                'type' => 'error',
                'message' => 'Đã xảy ra lỗi',
            ]);
        }

        if (isset($secondary_params)) {
            $secondary_params['parrent_id'] = $document->id;
            $secondary_document = $this->document_create($secondary_params);
    
            if (!$secondary_document) {
                return $redirect->with('noty', [
                    'type' => 'error',
                    'message' => 'Đã xảy ra lỗi',
                ]);
            }
        }
        
        return $redirect->with('noty', [
            'type' => 'success',
            'message' => 'Nộp đơn xin gia nhập đoàn luật sư thành công',
        ]);
    }

    public function document_create($params) {
        $degrees = $params['degrees'] ?? [];
        $family_members = $params['family_members'] ?? [];
        $working_records = $params['working_records'] ?? [];
        $attachments = $params['attachments'] ?? [];

        unset($params['degrees']);
        unset($params['family_members']);
        unset($params['working_records']);
        unset($params['attachments']);

        $params['fullname'] = mb_strtoupper($params['fullname']);
        if (!is_string($params['portrait_pic'])) {
            $path = $params['portrait_pic']->store('public/upload');
            $params['portrait_pic'] = 'storage/'.substr($path, strlen('public/'));
        }

        $document = $this->documentRepos->create($params);

        foreach ($degrees as $degree) {
            $degree['document_id'] = $document->id;
            $this->degreeRepos->create($degree);
        }

        foreach ($family_members as $family_member) {
            $family_member['document_id'] = $document->id;
            $this->familyMemberRepos->create($family_member);
        }

        foreach ($working_records as $working_record) {
            $working_record['document_id'] = $document->id;
            $this->workingRecordRepos->create($working_record);
        }

        foreach ($attachments as $attachment) {
            $attachment['document_id'] = $document->id;
            $attachment_files = $attachment['files'] ?? [];
            unset($attachment['files']);

            $attachment_model = $this->attachmentRepos->create($attachment);
            foreach ($attachment_files as $file) {
                $this->attachmentFileRepos->create([
                    'attachment_id' => $attachment_model->id,
                    'name' => $file->getClientOriginalName(),
                    'file' => 'storage/'.substr($file->store('public/upload'), strlen('public/')),
                ]);
            }
        }

        return $document;
    }
}
