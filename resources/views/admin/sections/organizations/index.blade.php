@extends('admin.layouts.master')

@section('title', 'Tổ chức hành nghề')

@section('contents')

@livewire('organizations.organization-list')
@livewire('organizations.organization-crud')

@endsection