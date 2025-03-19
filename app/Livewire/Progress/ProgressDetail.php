<?php

namespace App\Livewire\Progress;

use Livewire\Component;
use App\Livewire\Documents\DocumentDetail;

class ProgressDetail extends Component
{
    public $document;
    public $progress;
    public $progress_views = [
        1 => 'intern-register',
        2 => 'member-register',
        3 => 'card-issued',
    ];

    protected $listeners = ['get_data'];

    public function mount($document) {
        $this->document = $document;
        $this->progress = $document->progress;
    }

    public function get_data() {
        $this->document->refresh();
        $this->progress = $this->document->progress;
    }

    public function next_step($step) {
        $this->progress->update(['current_step' => $step]);
    }

    public function finished() {
        if ($this->progress->current_step < $this->progress->final_step) return;
        $this->progress->update(['is_finished' => 1]);
        $this->document->update(['document_status_id' => 3]);
        $this->dispatch('refresh')->to(DocumentDetail::class);
    }

    public function render()
    {
        return view('admin.sections.document-detail.livewire.progress-detail');
    }
}
