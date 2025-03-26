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
    public $notification = [
        1 => [
            3 => 'Thanh toán thành công. Vui lòng đợi quyết định tập sự',
            4 => 'Đã có quyết định tập sự',
            5 => 'Đã trả quyết định tập sự',
            6 => 'Đã hoàn tất quá trình đăng ký. Thực tập sinh bắt đầu quá trình thực tập'
        ],
        2 => [
            3 => 'Thanh toán thành công. Vui lòng đợi đoàn ra nghị quyết',
            4 => 'Đoàn đã ra Nghị quyết kèm Danh sách',
            5 => 'Đoàn đã trả quyết định kết nạp',
            6 => 'Đoàn đã trả thẻ luật sư',
        ],
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
        if (!($notification = $this->notification[$this->progress->progress_type_id][$step] ?? false)) return;
        $this->progress->user->notifications()->create([
            'title' => $this->progress->progress_type_id == 1 ? 'Đơn đăng ký tập sự' : 'Đơn đăng ký thành viên',
            'content' => $notification,
            'link' => route('my-progress.detail.index', ['slug' => $this->progress->type->slug]),
        ]);
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
