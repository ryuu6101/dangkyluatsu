<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Degrees\DegreeRepositoryInterface;
use App\Repositories\Documents\DocumentRepositoryInterface;
use App\Repositories\Attachments\AttachmentRepositoryInterface;
use App\Repositories\FamilyMembers\FamilyMemberRepositoryInterface;
use App\Repositories\ProgressTypes\ProgressTypeRepositoryInterface;
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
    protected $progressTypeRepos;

    public function __construct(
        DegreeRepositoryInterface $degreeRepos,
        DocumentRepositoryInterface $documentRepos,
        FamilyMemberRepositoryInterface $familyMemberRepos,
        WorkingRecordRepositoryInterface $workingRecordRepos,
        AttachmentRepositoryInterface $attachmentRepos,
        AttachmentFileRepositoryInterface $attachmentFileRepos,
        ProgressTypeRepositoryInterface $progressTypeRepos,
    ) {
        $this->degreeRepos = $degreeRepos;
        $this->documentRepos = $documentRepos;
        $this->familyMemberRepos = $familyMemberRepos;
        $this->workingRecordRepos = $workingRecordRepos;
        $this->attachmentRepos = $attachmentRepos;
        $this->attachmentFileRepos = $attachmentFileRepos;
        $this->progressTypeRepos = $progressTypeRepos;
    }

    public function home() {
        return redirect()->route('dashboard.index');
    }

    public function dashboard() {
        return view('user.sections.dashboard.index');
    }

    public function my_progress($slug) {
        $progress_type_id = $this->progressTypeRepos->getBySlug($slug)->id;
        $progress = auth()->user()->progresses->where('progress_type_id', $progress_type_id)->first();
        $progress_view = [
            1 => 'intern-register',
            2 => 'member-register',
            3 => 'card-issued',
            4 => 'card-reissued',
        ][$progress_type_id];

        return view('user.sections.my-progress.index')->with([
            'progress' => $progress,
            'progress_view' => $progress_view,
        ]);
    }
}
