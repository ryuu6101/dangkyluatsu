<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Degrees\DegreeRepositoryInterface;
use App\Repositories\Documents\DocumentRepositoryInterface;
use App\Repositories\Attachments\AttachmentRepositoryInterface;
use App\Repositories\FamilyMembers\FamilyMemberRepositoryInterface;
use App\Repositories\Organizations\OrganizationRepositoryInterface;
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
    protected $organizationRepos;

    public function __construct(
        DegreeRepositoryInterface $degreeRepos,
        DocumentRepositoryInterface $documentRepos,
        FamilyMemberRepositoryInterface $familyMemberRepos,
        WorkingRecordRepositoryInterface $workingRecordRepos,
        AttachmentRepositoryInterface $attachmentRepos,
        AttachmentFileRepositoryInterface $attachmentFileRepos,
        ProgressTypeRepositoryInterface $progressTypeRepos,
        OrganizationRepositoryInterface $organizationRepos,
    ) {
        $this->degreeRepos = $degreeRepos;
        $this->documentRepos = $documentRepos;
        $this->familyMemberRepos = $familyMemberRepos;
        $this->workingRecordRepos = $workingRecordRepos;
        $this->attachmentRepos = $attachmentRepos;
        $this->attachmentFileRepos = $attachmentFileRepos;
        $this->progressTypeRepos = $progressTypeRepos;
        $this->organizationRepos = $organizationRepos;
    }

    public function home() {
        return redirect()->route('dashboard.index');
    }

    public function dashboard() {
        return view('user.sections.dashboard.index');
    }

    public function progress_detail($slug) {
        $progress_type_id = $this->progressTypeRepos->getBySlug($slug)->id;
        $progress = auth()->user()->progresses->where('progress_type_id', $progress_type_id)->first();
        $views = [
            1 => 'intern-register',
            2 => 'member-register',
            3 => 'card-issued',
            4 => 'card-exchange',
        ];

        return view('user.sections.my-progress.index')->with([
            'progress' => $progress,
            'views' => $views,
            'organizations' => $this->organizationRepos->getAll(),
        ]);
    }

    public function my_profile() {
        return view('user.sections.my-profile.index');
    }

    public function credentials() {
        return view('user.sections.credentials.index');
    }

    public function notifications() {
        return view('user.sections.notifications.index');
    }
}
