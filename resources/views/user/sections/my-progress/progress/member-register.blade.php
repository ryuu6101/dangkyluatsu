<div class="row">
    <div class="col">
        <div class="card pt-3 px-4" style="background-color: rgba(255,255,255,0.7)">
            @php($sn = 0)
            <div class="wizard-progress mb-4">
                <div class="step {{ $progress->current_step > ++$sn ? 'complete' : ''}}">
                    <div class="div d-flex justify-content-center">
                        <div class="node">
                            <i class="icon-check2 icon-2x"></i>
                        </div>
                    </div>
                    <span>Đề nghị Kết nạp và Cấp thẻ</span>
                </div>
                <div class="step {{ $progress->current_step > $sn ? 'complete' : ''}}">
                    <div class="div d-flex justify-content-center">
                        <div class="node">
                            <i class="icon-check2 icon-2x"></i>
                        </div>
                    </div>
                    <span>Hồ sơ được duyệt</span>
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
                    <span>Đoàn ra nghị quyết, kèm Danh sách</span>
                </div>
                <div class="step {{ $progress->current_step > ++$sn ? 'complete' : ''}}">
                    <div class="div d-flex justify-content-center">
                        <div class="node">
                            <i class="icon-check2 icon-2x"></i>
                        </div>
                    </div>
                    <span>Trả thẻ kèm quyết định</span>
                </div>
            </div>

            @php($sn = 0)
            <div class="wizard-vertical px-4 mb-4">
                <div class="step {{ $progress->current_step > ++$sn ? 'complete' : ''}}">
                    <div class="step-header">
                        <div class="node">
                            <i class="icon-check2 icon-2x"></i>
                        </div>
                        <span>Bước 01: Đề nghị Kết nạp và Cấp thẻ</span>
                    </div>
                    <div class="step-content">
                        <span>Trường hợp 1: Với luật sư mới gia nhập</span>
                        @if ($progress->current_step > $sn)
                        <a href="#!" class="badge badge-white border rounded-pill ml-2 print-btn">In file</a> <br>
                        @else
                        <a href="#!" class="badge badge-white border rounded-pill ml-2" data-toggle="modal" data-target="#documentFormModal">
                            Lập giấy tại đây
                        </a> <br>
                        @endif
                        <span>Nội dung 1: Giấy đề nghị gia nhập Đoàn Luật sư TP.Đà Nẵng</span> <br>
                        <span>Nội dung 2: Bản sao CCHN Luật sư (02 bản có chứng thực)</span> <br>
                        <span>Nội dung 3: Phiếu lý lịch tư pháp (Bản chính và có thời hạn 06 tháng)</span> <br>
                        <span>Nội dung 4: Bản sao Quyết định nghỉ hưu hoặc Giấy xác nhận không phải công chức (Chứng thực)</span> <br>
                        <span>
                            Nội dung 5: Giấy Đề nghị cấp thẻ luật sư (mẫu 01 của Liên đoàn) kèm 04 ảnh chân dung 2x3 (nền trắng, áo sơ mi có cổ)
                        </span>
                    </div>
                </div>
                <div class="step {{ $progress->current_step > $sn ? 'complete' : ''}}">
                    <div class="step-header">
                        <div class="node">
                            <i class="icon-check2 icon-2x"></i>
                        </div>
                        <span>Bước 02: Nhân sự duyệt hồ sơ</span>
                    </div>
                    <div class="step-content">
                        <span>Tình trạng Hồ sơ của Bạn: </span>
                        @if ($progress->current_step > $sn)
                        <span class="badge badge-primary rounded-pill ml-2">Đã duyệt</span>
                        @else
                        <span class="badge badge-light text-muted border rounded-pill ml-2">Chưa duyệt</span>
                        @endif
                    </div>
                </div>
                <div class="step {{ $progress->current_step > ++$sn ? 'complete' : ''}}">
                    <div class="step-header">
                        <div class="node">
                            <i class="icon-check2 icon-2x"></i>
                        </div>
                        <span>Bước 03: Nộp phí gia nhập</span>
                    </div>
                    <div class="step-content">
                        <span>Chuyển khoản Internet Banking với nội dung "CCCD_Họ và tên_Ngày gia nhập đoàn"</span>
                        @if ($progress->current_step > $sn)
                        <span class="badge badge-primary rounded-pill ml-2">Đã nộp</span>
                        @elseif ($progress->current_step == $sn)
                        <a href="#!" class="badge badge-white border rounded-pill ml-2" 
                        data-toggle="modal" data-target="#selectBankAccountModal">
                            Nộp tiền
                        </a>
                        @else
                        <span class="badge badge-light text-muted border rounded-pill ml-2">Chưa nộp</span>
                        @endif
                    </div>
                </div>
                <div class="step {{ $progress->current_step > ++$sn ? 'complete' : ''}}">
                    <div class="step-header">
                        <div class="node">
                            <i class="icon-check2 icon-2x"></i>
                        </div>
                        <span>Bước 04: Đoàn ra Nghị quyết kèm Danh sách</span>
                    </div>
                    <div class="step-content">
                    </div>
                </div>
                <div class="step {{ $progress->current_step > ++$sn ? 'complete' : ''}}">
                    <div class="step-header">
                        <div class="node">
                            <i class="icon-check2 icon-2x"></i>
                        </div>
                        <span>Bước 05: Trả thẻ kèm quyết định</span>
                    </div>
                    <div class="step-content">
                        <span>Đoàn trả Quyết định kết nạp</span>
                        @if ($progress->current_step > $sn)
                        <span class="badge badge-primary rounded-pill ml-2">Đã trả</span>
                        @else
                        <span class="badge badge-light border text-muted rounded-pill ml-2">Chưa trả</span>
                        @endif
                        <br>
                        <span>Đoàn trả thẻ Luật sư</span>
                        @if ($progress->current_step > ++$sn)
                        <span class="badge badge-primary rounded-pill ml-2">Đã trả</span>
                        @else
                        <span class="badge badge-light border text-muted rounded-pill ml-2">Chưa trả</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>