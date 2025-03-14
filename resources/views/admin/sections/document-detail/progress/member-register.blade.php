@foreach ($progress_steps[$progress->progress_type_id] as $key => $step)
<div class="row mb-2">
    <div class="col-auto">
        @if ($progress->current_step > $key)
        <div class="node rounded-circle border border-primary text-primary">
            <i class="icon-checkmark2"></i>
        </div>
        @elseif ($progress->current_step == $key)
        <div class="node rounded-circle btn btn-outline-success" wire:click.prevent="next_step({{ $key + 1 }})">
            <span>{{ $key }}</span>
        </div>
        @else
        <div class="node rounded-circle border text-muted">
            <span>{{ $key }}</span>
        </div>
        @endif
    </div>
    <div class="col">
        <div class="d-flex align-items-center h-100 {{ $progress->current_step < $key ? 'text-muted' : '' }}">
            <strong>Bước 0{{ $key }}: {{ $step }}</strong>
        </div>
    </div>
</div>
@endforeach