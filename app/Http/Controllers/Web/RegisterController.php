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
        ]);
    }

    public function member_register($option) {
        if ($option == 'luat-su-moi') $form_type = 1;
        elseif ($option == 'luat-su-chuyen-tu-doan-khac-ve') $form_type = 2;
        else return abort(404);

        return view('web.sections.document-form.index')->with([
            'title' => 'Đăng ký gia nhập đoàn luật sư',
            'form' => 'member-register',
            'form_type' => $form_type,
        ]);
    }

    public function intern_register_post(Request $request) {
        // dd($request->all());
        $params = $request->all();
        unset($params['_method']);
        unset($params['_token']);

        $document = $this->document_create($params);

        if ($document) {
            return redirect()->route('home')->with('noty', [
                'type' => 'success',
                'message' => 'Nộp đơn đăng ký tập sự thành công',
            ]);
        }

        return redirect()->route('home')->with('noty', [
            'type' => 'error',
            'message' => 'Đã xảy ra lỗi',
        ]);
    }

    public function member_register_post(Request $request) {
        // dd($request->all());
        $params = $request->all();
        unset($params['_method']);
        unset($params['_token']);

        $document = $this->document_create($params);

        if ($document) {
            return redirect()->route('home')->with('noty', [
                'type' => 'success',
                'message' => 'Nộp đơn xin gia nhập đoàn luật sư thành công',
            ]);
        }

        return redirect()->route('home')->with('noty', [
            'type' => 'error',
            'message' => 'Đã xảy ra lỗi',
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

        $path = $params['portrait_pic']->store('public/upload');
        $params['portrait_pic'] = 'storage/'.substr($path, strlen('public/'));
        $params['fullname'] = mb_strtoupper($params['fullname']);

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
