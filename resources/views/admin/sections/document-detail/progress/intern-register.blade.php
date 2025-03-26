<div class="row">
    <div class="col">
        <div class="wizard-vertical px-4 mb-4">
            @php($sn = 0)
            <div class="step {{ $progress->current_step > ++$sn ? 'complete' : ''}}">
                <div class="step-header">
                    <div class="node">
                        <i class="icon-check2 icon-2x"></i>
                    </div>
                    <span>Đăng ký tập sự</span>
                </div>
            </div>
            <div class="step {{ $progress->current_step > $sn ? 'complete' : ''}}">
                <div class="step-header">
                    <div class="node">
                        <i class="icon-check2 icon-2x"></i>
                    </div>
                    <span>Hồ sơ được duyệt</span>
                    @if ($progress->current_step > $sn)
                    <span class="badge badge-success rounded-pill ml-2">Đã duyệt</span>
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
                    <span>Đã nộp tiền</span>
                    @if ($progress->current_step > $sn)
                    <span class="badge badge-success rounded-pill ml-2">Đã nộp</span>
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
                    <span>Có quyết định tập sự</span>
                    @if ($progress->current_step > $sn)
                    <span class="badge badge-success rounded-pill ml-2">Đã có</span>
                    @elseif ($progress->current_step == $sn)
                    <a href="#!" class="badge badge-white border rounded-pill ml-2" wire:click.prevent="next_step({{ $sn + 1 }})">
                        Chưa có
                    </a>
                    @else
                    <span class="badge badge-light text-muted border rounded-pill ml-2">Chưa có</span>
                    @endif
                </div>
                <div class="step-content">
                    <span>Đoàn trả quyết định tập sự</span>
                    @if ($progress->current_step > ++$sn)
                    <span class="badge badge-success rounded-pill ml-2">Đã trả</span>
                    @elseif ($progress->current_step == $sn)
                    <a href="#!" class="badge badge-white border rounded-pill ml-2" wire:click.prevent="next_step({{ $sn + 1 }})">
                        Chưa trả
                    </a>
                    @else
                    <span class="badge badge-light text-muted border rounded-pill ml-2">Chưa trả</span>
                    @endif
                </div>
            </div>
            <div class="step {{ $progress->current_step > ++$sn ? 'complete' : ''}}">
                <div class="step-header">
                    <div class="node">
                        <i class="icon-check2 icon-2x"></i>
                    </div>
                    <span>Bắt đầu tập sự</span>
                    @if ($progress->current_step == $sn)
                    <a href="#!" class="badge badge-white border rounded-pill ml-2" wire:click.prevent="next_step({{ $sn + 1 }})">
                        Bắt đầu
                    </a>
                    @elseif ($progress->current_step < $sn)
                    <span class="badge badge-light text-muted border rounded-pill ml-2">Chưa</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>