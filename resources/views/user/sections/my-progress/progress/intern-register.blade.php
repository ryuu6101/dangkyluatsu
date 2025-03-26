<div class="row">
    <div class="col">
        <div class="card pt-3 px-4" style="background-color: rgba(255,255,255,0.7)">
            @php($sn = 0)
            <div class="wizard-progress mb-4">
                <div class="step {{ $progress->current_step >= ++$sn ? 'complete' : ''}}">
                    <div class="div d-flex justify-content-center">
                        <div class="node">
                            <i class="icon-check2 icon-2x"></i>
                        </div>
                    </div>
                    <span>Đăng ký tập sự</span>
                </div>
                <div class="step {{ $progress->current_step > $sn ? 'complete' : ''}}">
                    <div class="div d-flex justify-content-center">
                        <div class="node">
                            <i class="icon-check2 icon-2x"></i>
                        </div>
                    </div>
                    <span>Hồ sơ đã được duyệt</span>
                </div>
                <div class="step {{ $progress->current_step > ++$sn ? 'complete' : ''}}">
                    <div class="div d-flex justify-content-center">
                        <div class="node">
                            <i class="icon-check2 icon-2x"></i>
                        </div>
                    </div>
                    <span>Đã nộp tiền</span>
                </div>
                <div class="step {{ $progress->current_step > ++$sn ? 'complete' : ''}}">
                    <div class="div d-flex justify-content-center">
                        <div class="node">
                            <i class="icon-check2 icon-2x"></i>
                        </div>
                    </div>
                    <span>Có quyết định tập sự</span>
                </div>
                <div class="step {{ $progress->current_step > ++$sn ? 'complete' : ''}}">
                    <div class="div d-flex justify-content-center">
                        <div class="node">
                            <i class="icon-check2 icon-2x"></i>
                        </div>
                    </div>
                    <span>Bắt đầu tập sự</span>
                </div>
            </div>

            @php($sn = 0)
            <div class="wizard-vertical px-4 mb-4">
                <div class="step {{ $progress->current_step > ++$sn ? 'complete' : ''}}">
                    <div class="step-header">
                        <div class="node">
                            <i class="icon-check2 icon-2x"></i>
                        </div>
                        <span>Đăng ký tập sự</span>
                    </div>
                    <div class="step-content">
                        <span>Nội dung 1: Lập Giấy Đề nghị Đăng ký Tập sự hành nghề Luật sư</span>
                        @if ($progress->current_step > $sn)
                        <a href="#!" class="badge badge-white border rounded-pill ml-2 print-btn">In file</a>
                        {{-- <a href="#!" class="badge badge-white border rounded-pill ml-2">Tải xuống hồ sơ</a> --}}
                        @else
                        <a href="#!" class="badge badge-white border rounded-pill ml-2">Lập giấy tại đây</a>
                        @endif
                        <br>
                        <span>Nội dung 2: Giấy xác nhận Tổ chức hành nghề Luật sư</span> <br>
                        <span>Nội dung 3: Chuẩn bị Bản sao Bằng Cử nhân Luật và Bằng Thạc sĩ (chứng thực)</span> <br>
                        <span>
                            Nội dung 4: Chuẩn bị Bản sao Giấy chứng nhận tốt nghiệp đào tạo nghề Luật sư quy định tại Khoản 4, 
                            Điều 3, Luật sư (chứng thực)
                        </span> <br>
                        <span>Nội dung 5: Chuẩn bị Sơ yếu Lý lịch có xác nhận địa phương</span> <br>
                    </div>
                </div>
                <div class="step {{ $progress->current_step > $sn ? 'complete' : ''}}">
                    <div class="step-header">
                        <div class="node">
                            <i class="icon-check2 icon-2x"></i>
                        </div>
                        <span>Hồ sơ được duyệt</span>
                        @if ($progress->current_step > $sn)
                        <span class="badge badge-success rounded-pill ml-2">Đã duyệt</span>
                        @else
                        <span class="badge badge-light text-muted border rounded-pill ml-2">Chưa duyệt</span>
                        @endif
                    </div>
                    <div class="step-content">
                        <span>Nếu hồ sơ không đạt, Đoàn sẽ thông báo qua Hệ thống. Nếu Hồ sơ đạt, tiếp bước 3</span>
                    </div>
                </div>
                <div class="step {{ $progress->current_step > ++$sn ? 'complete' : ''}}">
                    <div class="step-header">
                        <div class="node">
                            <i class="icon-check2 icon-2x"></i>
                        </div>
                        <span>Đã nộp tiền</span>
                        @if ($progress->current_step > $sn)
                        <span class="badge badge-success rounded-pill ml-2">Đã nộp</span>
                        @elseif ($progress->current_step == $sn)
                        <a href="#!" class="badge badge-white border rounded-pill ml-2" 
                        data-toggle="modal" data-target="#selectBankAccountModal">
                            Nộp tiền
                        </a>
                        @endif
                        @if ($progress->current_step <= $sn)
                        <span class="badge badge-light text-muted rounded-pill border ml-2">Chưa nộp</span>
                        @endif
                    </div>
                    <div class="step-content">
                        <span>Sau khi nộp phí xong, vui lòng đợi nhân sự quyết định</span>
                    </div>
                </div>
                <div class="step {{ $progress->current_step > ++$sn ? 'complete' : ''}}">
                    <div class="step-header">
                        <div class="node">
                            <i class="icon-check2 icon-2x"></i>
                        </div>
                        <span>Có quyết định tập sự</span>
                        @if ($progress->current_step > $sn)
                        <span class="badge badge-success rounded-pill ml-2">Đã có</span>
                        @else
                        <span class="badge badge-light border text-muted rounded-pill ml-2">Chưa có</span>
                        @endif
                    </div>
                    <div class="step-content">
                        <span>Có quyết định tập sự là đủ điều kiện để bắt đầu tập sự</span> <br>
                        <span>Đoàn trả quyết định tập sự</span>
                        @if ($progress->current_step > ++$sn)
                        <span class="badge badge-success rounded-pill ml-2">Đã trả</span>
                        @else
                        <span class="badge badge-light border text-muted rounded-pill ml-2">Chưa trả</span>
                        @endif
                    </div>
                </div>
                <div class="step {{ $progress->current_step > ++$sn ? 'complete' : ''}}">
                    <div class="step-header">
                        <div class="node">
                            <i class="icon-check2 icon-2x"></i>
                        </div>
                        <span>Bắt đầu tập sự</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>