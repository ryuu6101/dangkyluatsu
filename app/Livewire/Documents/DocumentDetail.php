<?php

namespace App\Livewire\Documents;

use Livewire\Component;
use App\Livewire\Progress\ProgressDetail;
use App\Repositories\Users\UserRepositoryInterface;
use App\Repositories\Documents\DocumentRepositoryInterface;

class DocumentDetail extends Component
{
    protected $userRepos;

    public $document;

    protected $listeners = ['refresh', '$refresh'];

    public function boot(
        UserRepositoryInterface $userRepos,
    ) {
        $this->userRepos = $userRepos;
    }

    public function mount($document) {
        $this->document = $document;
    }

    public function create_account() {
        $params = $this->document->toArray();
        $profile = array_slice($params, 5, 11);
        $profile['profile_pic'] = $params['portrait_pic'];
        $id_card = array_slice($params, 20, 3);
        $credentials = [
            'username' => $params['id_card_number'],
            'password' => bcrypt('Cnpt@123'),
        ];

        $user = $this->userRepos->create(array_merge($credentials, $profile, $id_card));

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
        
        $progress_type_id = [1=>1,2=>2,3=>3,4=>3][$this->document->document_type_id];
        $final_step = [1=>5,2=>5,3=>4,4=>4][$this->document->document_type_id];
    
        if ($user->progresses->where('progress_type_id', $progress_type_id)->where('is_finished', 1)->count()) return;

        if ($progress = $user->progresses->where('progress_type_id', $progress_type_id)->first()) {
            $progress->update(['document_id', $this->document->id]);
        } else {
            $user->progresses()->create([
                'document_id' => $this->document->id,
                'progress_type_id' => $progress_type_id,
                'current_step' => 2,
                'final_step' => $final_step,
            ]);
        }

        $this->document->update(['document_status_id' => 2]);

        $this->dispatch('get_data')->to(ProgressDetail::class);
    }

    public function decline() {
        $this->document->update(['document_status_id' => 4]);
    }

    public function render()
    {
        return view('admin.sections.document-detail.livewire.document-detail');
    }
}
