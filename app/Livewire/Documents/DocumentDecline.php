<?php

namespace App\Livewire\Documents;

use Livewire\Component;
use App\Mail\DocumentDeclineMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Livewire\Progress\ProgressDetail;
use App\Livewire\Documents\DocumentDetail;

class DocumentDecline extends Component
{
    protected $userRepos;

    public $document;
    public $note;
    public $site_config;

    protected $listeners = ['refresh', '$refresh'];

    protected $rules = [
        'note' => 'required',
    ];

    protected $messages = [
        'note.required' => 'Vui lòng điền trường này',
    ];

    public function mount($document) {
        $this->document = $document;
        $this->site_config = DB::table('site_configs')->first();
    }

    public function decline() {
        if ($this->document->document_status_id >= 2) return;

        $decline_email = new DocumentDeclineMail($this->document, $this->note);
        Mail::to($this->document->email)->send($decline_email);

        $this->document->update(['document_status_id' => 4]);
    }

    public function submit() {
        if (!$this->validate()) return;

        $this->decline();

        $this->dispatch('refresh')->to(DocumentDetail::class);
        $this->dispatch('get_data')->to(ProgressDetail::class);
        $this->dispatch('close-document-decline-modal');
        $this->dispatch('show-message', type: 'success', message: 'Đã từ chối hồ sơ');
    }

    public function render()
    {
        return view('admin.sections.document-detail.livewire.document-decline');
    }
}
