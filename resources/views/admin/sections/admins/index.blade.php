@extends('admin.layouts.master')

@section('title', 'Quản trị viên')

@section('contents')

@livewire('admins.admin-list')
@livewire('admins.admin-crud')

@endsection