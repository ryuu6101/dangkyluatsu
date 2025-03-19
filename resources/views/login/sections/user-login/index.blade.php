@extends('login.layouts.master')

@section('title', 'Đăng nhập')

<div class="container d-flex align-items-center justify-content-center" style="height: 100vh">
    <div class="row">
        <div class="col-auto">
            <form action="{{ route('user-login.auth') }}" method="post">
                @method('post')
                @csrf

                @session('member_register')
                <input type="hidden" name="member_register" value="{{ $value }}">
                @endsession
                <div class="d-flex align-item-center justify-content-center">
                    <div class="card text-center p-5" style="background-color: rgba(0, 0, 0, 0.1); width:35rem">
                        <div class="row mb-2">
                            <div class="col">
                                <h1 class="text-uppercase text-warning">
                                    <strong>Đăng nhập</strong>
                                </h1>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col">
                                <input type="text" name="username" class="form-control" placeholder="Tên đăng nhập">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col">
                                <input type="password" name="password" class="form-control" placeholder="Mật khẩu">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col">
                                <button type="submit" class="btn btn-warning">Đăng nhập</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>