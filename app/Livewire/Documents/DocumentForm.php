<?php

namespace App\Livewire\Documents;

use Livewire\Component;
use App\Repositories\Documents\DocumentRepositoryInterface;

class DocumentForm extends Component
{
    protected $documentRepos;

    public $document;
    public $form_views = [
        1 => 'intern-register',
        2 => 'member-register',
        3 => 'card-issued',
        4 => 'card-exchange',
    ];

    public function boot(
        DocumentRepositoryInterface $documentRepos,
    ) {
        $this->documentRepos = $documentRepos;
    }

    public function get_data($document_id) {
        $this->document = $this->documentRepos->find($document_id);
    }

    public function render()
    {
        return view('admin.sections.document-detail.livewire.document-form');
    }
}
