<?php

namespace App\Livewire\Documents;

use Livewire\Component;
use App\Mail\DocumentApproveMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Livewire\Progress\ProgressDetail;
use App\Livewire\Documents\DocumentDetail;
use App\Repositories\Users\UserRepositoryInterface;

class DocumentApprove extends Component
{
    protected $userRepos;

    public $document;
    public $credentials;
    public $datetime;
    public $site_config;

    protected $listeners = ['refresh', '$refresh'];

    protected $rules = [
        'credentials.*' => 'required',
        'datetime' => 'required',
    ];

    protected $messages = [
        'credentials.*.required' => 'Vui lòng điền trường này',
        'datetime.required' => 'Vui lòng điền trường này',
    ];

    public function boot(
        UserRepositoryInterface $userRepos,
    ) {
        $this->userRepos = $userRepos;
    }

    public function mount($document) {
        $this->document = $document;
        $this->site_config = DB::table('site_configs')->first();

        $this->credentials = [
            'username' => $document->id_card_number,
            'password' => $this->site_config->default_password,
        ];
    }

    public function create_account() {
        $params = $this->document->toArray();
        $profile = array_slice($params, 5, 11);
        $profile['profile_pic'] = $params['portrait_pic'];
        $id_card = array_slice($params, 19, 3);
        $this->credentials['password'] = bcrypt($this->credentials['password']);

        $user = $this->userRepos->create(array_merge($this->credentials, $profile, $id_card));

        $family_members = array_map(function($member) use ($user) {
            unset($member['id'],$member['document_id'],$member['created_at'],$member['updated_at']);
            $member['user_id'] = $user->id;
            return $member;
        }, $this->document->family_members->toArray());

        $working_records = array_map(function($record) use ($user) {
            unset($record['id'],$record['document_id'],$record['created_at'],$record['updated_at']);
            $record['user_id'] = $user->id;
            return $record;
        }, $this->document->working_records->toArray());

        $degrees = array_map(function($degree) use ($user) {
            unset($degree['id'],$degree['document_id'],$degree['created_at'],$degree['updated_at']);
            $degree['user_id'] = $user->id;
            return $degree;
        }, $this->document->degrees->toArray());

        $user->family_members()->createMany($family_members);
        $user->working_records()->createMany($working_records);
        $user->degrees()->createMany($degrees);

        $this->document->update(['user_id' => $user->id]);

        return $user;
    }

    public function approve() {
        if ($this->document->document_status_id >= 2) return;
        if (!($user = $this->document->user)) $user = $this->create_account();

        $approve_email = new DocumentApproveMail($this->document, $user, $this->datetime);
        Mail::to($user->email)->send($approve_email);
        
        $this->document->update(['document_status_id' => 2]);

        $progress_type_id = [1=>1,2=>2][$this->document->document_type_id];
        $final_step = [1=>6,2=>6][$this->document->document_type_id];
    
        if ($user->progresses->where('progress_type_id', $progress_type_id)->where('is_finished', 1)->count()) return;
        
        if ($progress = $user->progresses->where('progress_type_id', $progress_type_id)->where('is_finished', 0)->first()) {
            $progress->update([
                'document_id' => $this->document->id,
                'current_step' => 2,
            ]);
        } else {
            $user->progresses()->create([
                'document_id' => $this->document->id,
                'progress_type_id' => $progress_type_id,
                'current_step' => 2,
                'final_step' => $final_step,
            ]);
        }
    }

    public function submit() {
        if (!$this->validate()) return;

        $this->approve();

        $this->dispatch('refresh')->to(DocumentDetail::class);
        $this->dispatch('get_data')->to(ProgressDetail::class);
        $this->dispatch('close-document-approve-modal');
        $this->dispatch('show-message', type: 'success', message: 'Duyệt hồ sơ thành công');
    }

    public function render()
    {
        return view('admin.sections.document-detail.livewire.document-approve');
    }
}
