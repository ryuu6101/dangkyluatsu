<div class="row">
    <div class="col">
        <div class="wizard-vertical pl-4 mb-4">
            @php($sn = 0)
            <div class="step {{ $progress->current_step > ++$sn ? 'complete' : ''}}">
                <div class="step-header">
                    <div class="node">
                        <i class="icon-check2 icon-2x"></i>
                    </div>
                    <span>Bước 01: Đề nghị Kết nạp và Cấp thẻ</span>
                </div>
            </div>
            <div class="step {{ $progress->current_step > $sn ? 'complete' : ''}}">
                <div class="step-header">
                    <div class="node">
                        <i class="icon-check2 icon-2x"></i>
                    </div>
                    <span>Bước 02: Nhân sự duyệt hồ sơ</span>
                    @if ($progress->current_step > $sn)
                    <span class="badge badge-primary rounded-pill ml-2">Đã duyệt</span>
                    @elseif ($progress->current_step == $sn)
                    <a href="#!" class="badge badge-white border rounded-pill ml-2" wire:click.prevent="next_step({{ $sn + 1 }})">
                        Chưa duyệt
                    </a>
                    @else
                    <span class="badge badge-light text-muted border rounded-pill ml-2">Chưa duyệt</span>
                    @endif
                </div>
            </div>
            <div class="step {{ $progress->current_step > ++$sn ? 'complete' : ''}}">
                <div class="step-header">
                    <div class="node">
                        <i class="icon-check2 icon-2x"></i>
                    </div>
                    <span>Bước 03: Nộp phí gia nhập</span>
                    @if ($progress->current_step > $sn)
                    <span class="badge badge-primary rounded-pill ml-2">Đã nộp</span>
                    @elseif ($progress->current_step == $sn)
                    <a href="#!" class="badge badge-white border rounded-pill ml-2" wire:click.prevent="next_step({{ $sn + 1 }})">
                        Chưa nộp
                    </a>
                    @else
                    <span class="badge badge-light text-muted border rounded-pill ml-2">Chưa nộp</span>
                    @endif
                </div>
            </div>
            <div class="step {{ $progress->current_step > ++$sn ? 'complete' : ''}}">
                <div class="step-header">
                    <div class="node">
                        <i class="icon-check2 icon-2x"></i>
                    </div>
                    <span>Bước 04: Đoàn ra Nghị quyết kèm Danh sách</span>
                    @if ($progress->current_step > $sn)
                    <span class="badge badge-primary rounded-pill ml-2">Đã có</span>
                    @elseif ($progress->current_step == $sn)
                    <a href="#!" class="badge badge-white border rounded-pill ml-2" wire:click.prevent="next_step({{ $sn + 1 }})">
                        Chưa có
                    </a>
                    @else
                    <span class="badge badge-light text-muted border rounded-pill ml-2">Chưa có</span>
                    @endif
                </div>
            </div>
            <div class="step {{ $progress->current_step > ++$sn ? 'complete' : ''}}">
                <div class="step-header">
                    <div class="node">
                        <i class="icon-check2 icon-2x"></i>
                    </div>
                    <span>Bước 05: Trả thẻ kèm quyết định</span>
                </div>
                <div class="step-content">
                    <span>Đoàn trả Quyết định kết nạp</span>
                    @if ($progress->current_step > $sn)
                    <span class="badge badge-primary rounded-pill ml-2">Đã trả</span>
                    @elseif ($progress->current_step == $sn)
                    <a href="#!" class="badge badge-white border rounded-pill ml-2" wire:click.prevent="next_step({{ $sn + 1 }})">
                        Chưa trả
                    </a>
                    @else
                    <span class="badge badge-light text-muted border rounded-pill ml-2">Chưa trả</span>
                    @endif
                    <br>
                    <span>Đoàn trả thẻ Luật sư</span>
                    @if ($progress->current_step > ++$sn)
                    <span class="badge badge-primary rounded-pill ml-2">Đã trả</span>
                    @elseif ($progress->current_step == $sn)
                    <a href="#!" class="badge badge-white border rounded-pill ml-2" wire:click.prevent="next_step({{ $sn + 1 }})">
                        Chưa trả
                    </a>
                    @else
                    <span class="badge badge-light text-muted border rounded-pill ml-2">Chưa trả</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>