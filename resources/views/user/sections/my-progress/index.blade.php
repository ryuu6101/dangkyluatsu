@extends('user.layouts.master')

@section('title', $progress->type->name)

@push('styles')
<link href="{{ asset('custom_assets/css/wizard_progress.css') }}" rel="stylesheet" type="text/css">
@endpush

@section('contents')

@include('user.sections.my-progress.progress.'.$views[$progress->type->id])

@if ($progress->current_step <= 1)
@include('user.sections.my-progress.forms.'.$views[$progress->type->id])
@includeWhen($progress->type->id == 2, 'user.sections.my-progress.forms.card-issued')
@include('web.components.term-and-condition')
@endif

@if ($document = $progress->document)
<div class="d-none">
    <div id="printJs">
        @include('user.sections.my-progress.print.'.$views[$document->type->id], ['document' => $document])

        @if ($secondary_document = $document->secondary_document)
        @include('user.sections.my-progress.print.'.$views[$secondary_document->type->id], ['document' => $secondary_document])
        @endif
    </div>
</div>
@endif

@if ($progress->current_step == 2)
@livewire('bank-accounts.bank-account-select', ['progress_type_id' => $progress->type->id])
@endif

@endsection

@push('scripts')
{{-- <script src="https://printjs-4de6.kxcdn.com/print.min.js"></script> --}}
<script>
    $(document).ready(function() {
        if ($('#printJs').length) {
            $('.print-btn').on('click', function() {
                event.preventDefault();
                printJS({
                    printable: 'printJs',
                    type: 'html',
                    scanStyles: false,
                    css: [
                        "{{ asset('assets/css/bootstrap.min.css') }}",
                        "{{ asset('print_js/styles/document.css') }}",
                    ],
                });
            });
        }
    });
</script>
@endpush