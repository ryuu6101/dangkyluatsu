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
                <a href="{{ route('intern-register.index') }}" class="btn btn-warning mb-2" style="width:20rem">
                    Đăng ký tập sự
                </a>
                <a href="#!" class="btn btn-warning mb-2" style="width:20rem" data-toggle="modal" data-target="#lawyerSelectModal">
                    Đăng ký gia nhập đoàn luật sư
                </a>
                <a href="{{ route('user-login.index') }}" class="btn btn-warning mb-2" style="width:20rem">
                    Đăng nhập
                </a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="lawyerSelectModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body p-4">
                <div class="row">
                    <div class="col">
                        <h3><strong>Bạn là ai?</strong></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label class="custom-control custom-control-info custom-radio mb-2">
                            <input type="radio" class="custom-control-input" name="lawyer_select" value=1 checked>
                            <span class="custom-control-label">Luật sư mới</span>
                        </label>
                        <label class="custom-control custom-control-info custom-radio mb-2">
                            <input type="radio" class="custom-control-input" name="lawyer_select" value=2>
                            <span class="custom-control-label">Luật sư chuyển từ đoàn khác về</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-sm btn-primary confirm-btn">Xác nhận</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="haveAccountModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body p-4">
                <div class="row">
                    <div class="col">
                        <h3><strong>Bạn đã có tài khoản chưa?</strong></h3>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{ route('member-register.index', ['option' => 'luat-su-moi']) }}" class="btn btn-sm btn-light">Chưa có</a>
                <a href="{{ route('member-register.index', ['option' => 'da-co-tai-khoan']) }}" class="btn btn-sm btn-primary">Đã có</a>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('.confirm-btn').on('click', function() {
            if ($('input[name="lawyer_select"]:checked').val() == 1) {
                $('#lawyerSelectModal').modal('hide');
                $('#haveAccountModal').modal('show');
            } else {
                window.location.href = "{{ route('member-register.index', ['option' => 'luat-su-chuyen-tu-doan-khac-ve']) }}";
            }
        });
    });
</script>
@endpush