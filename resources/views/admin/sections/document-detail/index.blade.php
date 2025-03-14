@extends('admin.layouts.master')

@section('title', 'Hồ sơ chi tiết')

@section('contents')

<div class="row align-items-stretch">
    @livewire('documents.document-detail', ['document' => $document])
    @livewire('progress.progress-detail', ['document' => $document])
</div>

@livewire('documents.document-form', ['document' => $document])
@livewire('attachments.attachment-preview')

@endsection