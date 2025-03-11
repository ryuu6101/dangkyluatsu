@extends('user.layouts.master')

@section('title', 'Dashboard')

@push('styles')
<link href="{{ asset('custom_assets/css/wizard_progress.css') }}" rel="stylesheet" type="text/css">
@endpush

@section('contents')

<div class="row">
    <div class="col">
        <div class="card pt-3 px-4" style="background-color: rgba(255,255,255,0.7)">
            <div class="wizard-progress mb-4">
                <div class="step complete">
                    <div class="node">
                        <span class="d-flex align-items-center justify-content-center h-100">
                            <i class="icon-check2 icon-2x"></i>
                        </span>
                    </div>
                    Đăng ký tập sự
                </div>
                <div class="step complete">
                    <div class="node">
                        <span class="d-flex align-items-center justify-content-center h-100">
                            <i class="icon-check2 icon-2x"></i>
                        </span>
                    </div>
                    Hồ sơ đã được duyệt
                </div>
                <div class="step in-progress">
                    <div class="node">
                        <span class="d-flex align-items-center justify-content-center h-100">
                            3
                        </span>
                    </div>
                    Đã nộp tiền
                </div>
                <div class="step">
                    <div class="node">
                        <span class="d-flex align-items-center justify-content-center h-100">
                            4
                        </span>
                    </div>
                    Có quyết định tập sự
                </div>
                <div class="step">
                    <div class="node">
                        <span class="d-flex align-items-center justify-content-center h-100">
                            5
                        </span>
                    </div>
                    Bắt đầu tập sự
                </div>
            </div>

            <div class="wizard-vertical px-4 mb-4">
                <div class="step complete">
                    <div class="step-header">
                        <div class="node">
                            <i class="icon-check2 icon-2x"></i>
                        </div>
                        <span>Đăng ký tập sự</span>
                    </div>
                    <div class="step-content">
                        <span>Nội dung 1: Lập Giấy Đề nghị Đăng ký Tập sự hành nghề Luật sư</span>
                        <a href="#!" class="badge badge-white border rounded-pill ml-2">In file</a>
                        <a href="#!" class="badge badge-white border rounded-pill ml-2">Tải xuống hồ sơ</a> <br>
                        <span>Nội dung 2: Giấy xác nhận Tổ chức hành nghề Luật sư</span> <br>
                        <span>Nội dung 3: Chuẩn bị Bản sao Bằng Cử nhân Luật và Bằng Thạc sĩ (chứng thực)</span> <br>
                        <span>
                            Nội dung 4: Chuẩn bị Bản sao Giấy chứng nhận tốt nghiệp đào tạo nghề Luật sư quy định tại Khoản 4, 
                            Điều 3, Luật sư (chứng thực)
                        </span> <br>
                        <span>Nội dung 5: Chuẩn bị Sơ yếu Lý lịch có xác nhận địa phương</span> <br>
                    </div>
                </div>
                <div class="step complete">
                    <div class="step-header">
                        <div class="node">
                            <i class="icon-check2 icon-2x"></i>
                        </div>
                        <span>Hồ sơ được duyệt</span>
                        <span class="badge badge-success rounded-pill ml-2">Đã duyệt</span>
                    </div>
                    <div class="step-content">
                        <span>Nếu hồ sơ không đạt, Đoàn sẽ thông báo qua Hệ thống. Nếu Hồ sơ đạt, tiếp bước 3</span>
                    </div>
                </div>
                <div class="step">
                    <div class="step-header">
                        <div class="node">3</div>
                        <span>Đã nộp tiền</span>
                        <span class="badge badge-light text-muted rounded-pill border ml-2">Chưa nộp</span>
                        <a href="#!" class="badge badge-white border rounded-pill ml-2">Nộp tiền</a>
                    </div>
                    <div class="step-content">
                        <span>Sau khi nộp phí xong, vui lòng đợi nhân sự quyết định</span>
                    </div>
                </div>
                <div class="step">
                    <div class="step-header">
                        <div class="node">4</div>
                        <span>Có quyết định tập sự</span>
                        <span class="badge badge-light text-muted rounded-pill border ml-2">Chưa có</span>
                    </div>
                    <div class="step-content">
                        <span>Có quyết định tập sự là đủ điều kiện để bắt đầu tập sự</span> <br>
                        <span>Đoàn trả quyết định tập sự</span>
                        <span class="badge badge-light text-muted rounded-pill border ml-2">Chưa trả</span>
                    </div>
                </div>
                <div class="step">
                    <div class="step-header">
                        <div class="node">5</div>
                        <span>Bắt đầu tập sự</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection