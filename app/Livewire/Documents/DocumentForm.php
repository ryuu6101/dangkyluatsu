<?php

namespace App\Livewire\Documents;

use Livewire\Component;

class DocumentForm extends Component
{
    protected $documentRepos;

    public $document;
    public $form_views = [
        1 => 'intern-register',
        2 => 'member-register',
    ];

    public function mount($document) {
        $this->document = $document;
    }

    public function render()
    {
        return view('admin.sections.document-detail.livewire.document-form');
    }
}
