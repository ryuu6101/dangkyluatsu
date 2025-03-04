@extends('web.layouts.master')

@section('title', 'Trang chủ')

@section('contents')

<div class="container">
    <div class="row align-content-center" style="height:100vh">
        <div class="col-12 text-center text-uppercase">
            <h1>ĐOÀN LUẬT SƯ THÀNH PHỐ ĐÀ NẴNG</h1>
            <h4>CHÀO MỪNG ĐẾN VỚI ĐOÀN LUẬT SƯ THÀNH PHỐ ĐÀ NẴNG</h4>
        </div>
        <div class="col-12 text-center mt-4">
            <div class="d-flex flex-column align-items-center">
                <a type="button" class="btn btn-primary mb-2" style="width:20rem"
                href="{{ route('intern.index') }}">
                    Đăng ký tập sự
                </a>
                <a type="button" class="btn btn-primary mb-2" style="width:20rem">
                    Đăng ký gia nhập đoàn luật sư
                </a>
                <a type="button" class="btn btn-primary mb-2" style="width:20rem">
                    Đăng nhập
                </a>
            </div>
        </div>
    </div>
</div>

@endsection