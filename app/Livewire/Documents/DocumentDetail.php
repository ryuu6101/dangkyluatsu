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

    public function render()
    {
        return view('admin.sections.document-detail.livewire.document-detail');
    }
}
