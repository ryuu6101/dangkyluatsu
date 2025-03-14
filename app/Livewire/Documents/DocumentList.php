<?php

namespace App\Livewire\Documents;

use Livewire\Component;
use App\Repositories\Documents\DocumentRepositoryInterface;

class DocumentList extends Component
{
    protected $documentRepos;

    public $params = [];
    public $paginate = 10;

    public function boot(
        DocumentRepositoryInterface $documentRepos,
    ) {
        $this->documentRepos = $documentRepos;
    }

    public function render()
    {
        $documents = $this->documentRepos->filter($this->params, $this->paginate);

        return view('admin.sections.documents.livewire.document-list')->with([
            'documents' => $documents,
        ]);
    }
}
