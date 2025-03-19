@extends('admin.layouts.master')

@section('title', 'Hồ sơ chi tiết')

@section('contents')

<div class="row">
    @livewire('documents.document-detail', ['document' => $document])
    @livewire('progress.progress-detail', ['document' => $document])
</div>

@livewire('documents.document-form', ['document' => $document])
@livewire('documents.document-approve', ['document' => $document])
@livewire('documents.document-decline', ['document' => $document])
@livewire('attachments.attachment-preview')

@endsection