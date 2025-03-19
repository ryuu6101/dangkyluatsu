@extends('user.layouts.master')

@section('title', $progress->type->name)

@push('styles')
<link href="{{ asset('custom_assets/css/wizard_progress.css') }}" rel="stylesheet" type="text/css">
@endpush

@section('contents')

@include('user.sections.my-progress.progress.'.$progress_view)

@if ($progress_view == 'member-register' && $progress->step <= 1)
@include('user.sections.my-progress.forms.member-register')
@include('web.components.term-and-condition')
@endif

@endsection