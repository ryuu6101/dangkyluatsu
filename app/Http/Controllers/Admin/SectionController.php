<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Degrees\DegreeRepositoryInterface;
use App\Repositories\Documents\DocumentRepositoryInterface;
use App\Repositories\Attachments\AttachmentRepositoryInterface;
use App\Repositories\FamilyMembers\FamilyMemberRepositoryInterface;
use App\Repositories\WorkingRecords\WorkingRecordRepositoryInterface;
use App\Repositories\AttachmentFiles\AttachmentFileRepositoryInterface;

class SectionController extends Controller
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

    public function home() {
        return redirect()->route('admin.documents.index');
    }

    public function documents() {
        return view('admin.sections.documents.index');
    }

    public function document_detail($id) {
        return view('admin.sections.document-detail.index')->with([
            'document' => $this->documentRepos->find($id),
        ]);
    }

    public function mail_config() {
        return view('admin.sections.mail-config.index');
    }
}
