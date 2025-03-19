@push('styles')
<link href="{{ asset('custom_assets/css/wizard_progress.css') }}" rel="stylesheet" type="text/css">
@endpush

<div class="{{ $progress ? 'col-auto' : '' }}">
    @if ($progress)
    <div class="card" style="background-color: rgba(255,255,255,0.7)">
        <div class="card-header">
            <h3 class="text-uppercase">
                <strong>{{ $progress->type->name }}</strong>
            </h3>
        </div>
        <div class="card-body pl-4">
            @include('admin.sections.document-detail.progress.'.$progress_views[$progress->progress_type_id])
        </div>
        <div class="card-footer text-right">
            @if ($progress->is_finished)
            <button type="button" class="btn btn-outline-primary" disabled>
                <i class="icon-checkmark2 mr-2"></i>
                Đã hoàn thành
            </button>
            @else
            <button type="button" class="btn btn-primary" wire:click.prevent="finished" 
            @disabled($progress->current_step < $progress->final_step)>
                Hoàn thành
            </button>
            @endif
        </div>
    </div>
    @endif
</div>