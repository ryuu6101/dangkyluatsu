<?php

namespace App\Livewire\Documents;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\Documents\DocumentRepositoryInterface;
use App\Repositories\DocumentStatuses\DocumentStatusRepositoryInterface;

class DocumentList extends Component
{
    use WithPagination;

    protected $documentRepos;
    protected $documentStatusRepos;

    public $document_statuses;
    public $params = [];
    public $paginate = 10;

    public function boot(
        DocumentRepositoryInterface $documentRepos,
        DocumentStatusRepositoryInterface $documentStatusRepos,
    ) {
        $this->documentRepos = $documentRepos;
        $this->documentStatusRepos = $documentStatusRepos;
    }

    public function mount() {
        $this->document_statuses = $this->documentStatusRepos->getAll();
        // $this->params['document_status_id'] = 1;
    }

    public function render()
    {
        $documents = $this->documentRepos->filter($this->params, 0, 'desc')->whereNull('parrent_id')
                        ->sortBy('document_status_id')->paginate($this->paginate);

        return view('admin.sections.documents.livewire.document-list')->with([
            'documents' => $documents,
        ]);
    }
}
