<?php

namespace App\Livewire\Attachments;

use Livewire\Component;

class AttachmentPreview extends Component
{
    public $image_url;

    public function render()
    {
        return view('admin.sections.document-detail.livewire.attachment-preview');
    }
}
