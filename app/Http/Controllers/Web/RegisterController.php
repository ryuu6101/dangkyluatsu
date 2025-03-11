<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Documents\DocumentRepositoryInterface;
use App\Repositories\Attachments\AttachmentRepositoryInterface;
use App\Repositories\FamilyMembers\FamilyMemberRepositoryInterface;
use App\Repositories\WorkingRecords\WorkingRecordRepositoryInterface;
use App\Repositories\AttachmentFiles\AttachmentFileRepositoryInterface;

class RegisterController extends Controller
{
    protected $documentRepos;
    protected $familyMemberRepos;
    protected $workingRecordRepos;
    protected $attachmentRepos;
    protected $attachmentFileRepos;

    public function __construct(
        DocumentRepositoryInterface $documentRepos,
        FamilyMemberRepositoryInterface $familyMemberRepos,
        WorkingRecordRepositoryInterface $workingRecordRepos,
        AttachmentRepositoryInterface $attachmentRepos,
        AttachmentFileRepositoryInterface $attachmentFileRepos,
    ) {
        $this->documentRepos = $documentRepos;
        $this->familyMemberRepos = $familyMemberRepos;
        $this->workingRecordRepos = $workingRecordRepos;
        $this->attachmentRepos = $attachmentRepos;
        $this->attachmentFileRepos = $attachmentFileRepos;
    }

    public function intern_register(Request $request) {
        // dd($request->all());
        $params = $request->all();
        unset($params['_method']);
        unset($params['_token']);

        $family_members = $params['family_members'] ?? [];
        $working_records = $params['working_records'] ?? [];
        $attachments = $params['attachments'] ?? [];

        unset($params['family_members']);
        unset($params['working_records']);
        unset($params['attachments']);

        $params['portrait_pic'] = 'storage/'.$params['portrait_pic']->store('public/upload');

        $document = $this->documentRepos->create($params);

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
                    'file' => 'storage/'.$file->store('public/upload'),
                ]);
            }
        }
    }
}
