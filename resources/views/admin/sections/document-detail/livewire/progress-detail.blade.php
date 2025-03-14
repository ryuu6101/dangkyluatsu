@push('styles')
<style>
    .node {
        aspect-ratio: 1/1;
        width: 2.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        border-width: 1px;
    }
</style>
@endpush

<div class="{{ $progress ? 'col-auto' : '' }}">
    @if ($progress)
    <div class="card h-100" style="background-color: rgba(255,255,255,0.7)">
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
            @elseif ($progress->current_step > $progress->final_step)
            <button type="button" class="btn btn-primary" wire:click.prevent="finished">
                Hoàn thành
            </button>
            @else
            <button type="button" class="btn btn-primary" disabled>
                Hoàn thành
            </button>
            @endif
        </div>
    </div>
    @endif
</div>