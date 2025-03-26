@extends('user.layouts.master')

@section('title', 'Bảng tin')

@section('contents')

<div class="row justify-content-center">
    <div class="col-6">
        <div class="card text-center p-3">
            @php($user = auth()->guard('web')->user())
            <div class="row justify-content-center mb-3">
                <div class="col-auto">
                    <img src="{{ asset($user->profile_pic) }}" alt="" class="img-fluid rounded-circle border" height="100" width="100">
                </div>
            </div>
            <div class="span">Chào <strong class="font-italic">{{ $user->fullname }}</strong></div>
        </div>
    </div>
</div>

@endsection