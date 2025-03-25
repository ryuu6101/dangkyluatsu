@extends('admin.layouts.master')

@section('title', 'Tài khoản ngân hàng')

@section('contents')

@livewire('bank-accounts.bank-account-list')
@livewire('bank-accounts.bank-account-crud')

@endsection