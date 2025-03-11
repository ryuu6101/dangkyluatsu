@extends('web.layouts.master')

@section('title', 'Đăng ký thực tập')

@push('styles')
<link rel="stylesheet" href="{{ asset('custom_assets/css/document_form.css') }}">
@endpush    

@section('contents')

<div class="container">
    <form action="{{ route('intern.register') }}" autocomplete="off" class="document-form" 
    novalidate method="post" id="internForm" enctype="multipart/form-data">
        @method("post")
        @csrf
        <input type="hidden" name="document_type_id" value="1">
        <div class="card shadow mt-5">
            <div class="card-body py-3" style="padding: 0 6rem">
                <div class="row">
                    <div class="col">
                        <div class="text-center">
                            <h4>
                                <strong class="text-uppercase">CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</strong> <br>
                                <strong class="border-bottom border-dark pb-2">Độc lập - Tự do - Hạnh phúc</strong>
                            </h4>
                        </div>
                    </div>
                </div>
    
                <div class="row mb-3">
                    <div class="col-2">
                        <input type="file" class="invisible" style="height: 0" name="portrait_pic" id="portraitPicture" accept="image/*"> 
                        <div class="d-none"></div>
                        <label class="border border-dark d-flex align-items-center justify-content-center" 
                        style="aspect-ratio: 3/4; width:8rem" type="button" for="portraitPicture">
                            <h3 class="text-uppercase text-center">
                                <strong>Ảnh 3x4</strong> <br>
                                <i class="icon-image2 icon-2x text-muted"></i>
                            </h3>
                        </label>
                    </div>
                    <div class="col-8">
                        <div class="text-center">
                            <h3 class="mt-5 mb-3">
                                <strong class="text-uppercase">
                                    GIẤY ĐỀ NGHỊ <br> ĐĂNG KÝ TẬP SỰ HÀNH NGHỀ LUẬT SƯ
                                </strong> <br>
                            </h3>
                            <span class="mt-5">
                                <strong class="">Kính gửi: Đoàn Luật sư thành phố Đà Nẵng</strong>
                            </span>
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="col">
                        <h5><strong class="text-warning">I. Thông tin cá nhân</strong></h5>
                    </div>
                </div>
    
                <div class="row flex-nowrap mb-2">
                    <div class="col-auto">
                        <strong>1. Tên tôi là (ghi bằng chữ in hoa): </strong>
                    </div>
                    <div class="col">
                        <input type="text" class="dotted-line-input text-uppercase" name="fullname" required>
                        <span class="error-message text-danger"></span>
                    </div>
                </div>
    
                <div class="row mb-2">
                    <div class="col-4">
                        <div class="row">
                            <div class="col-auto">
                                <strong>2. Giới tính: </strong>
                            </div>
                            <div class="col">
                                <select class="select-box dotted-line-input" required name="gender">
                                    <option value="" hidden>Chọn</option>
                                    <option value="0" class="text-dark">Nam</option>
                                    <option value="1" class="text-dark">Nữ</option>
                                    <option value="2" class="text-dark">Khác</option>
                                </select>
                                <span class="error-message text-danger"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="col-auto">
                                <strong>3. Ngày sinh: </strong>
                            </div>
                            <div class="col">
                                <input type="text" class="dotted-line-input datepicker" required placeholder="DD/MM/YYYY" name="birthday">
                                <span class="error-message text-danger"></span>
                                <span class="badge position-absolute" style="right:.5rem;top:0;pointer-events:none;">
                                    <i class="icon-calendar2"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="col-auto">
                                <strong>4. Quốc tịch: </strong>
                            </div>
                            <div class="col">
                                <input type="text" class="dotted-line-input" required readonly value="Việt Nam" name="nationality">
                                <span class="error-message text-danger"></span>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="row mb-2">
                    <div class="col-4">
                        <div class="row">
                            <div class="col-auto">
                                <strong>5. Dân tộc: </strong>
                            </div>
                            <div class="col">
                                <input type="text" class="dotted-line-input" required name="ethnic">
                                <span class="error-message text-danger"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="col-auto">
                                <strong>6. Tôn giáo: </strong>
                            </div>
                            <div class="col">
                                <input type="text" class="dotted-line-input" required name="religious">
                                <span class="error-message text-danger"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="col-auto">
                                <strong>7. Nơi sinh: </strong>
                            </div>
                            <div class="col">
                                <select class="select-box dotted-line-input" required name="birthplace">
                                    <option value="" hidden>Chọn</option>
                                    <option value="Đà Nẵng" class="text-dark">Đà Nẵng</option>
                                </select>
                                <span class="error-message text-danger"></span>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="row mb-2">
                    <div class="col-auto">
                        <strong>8. Nơi thường trú: </strong>
                    </div>
                    <div class="col">
                        <input type="text" class="dotted-line-input" required name="residence_place">
                        <span class="error-message text-danger"></span>
                    </div>
                </div>
    
                <div class="row mb-2">
                    <div class="col-auto">
                        <strong>9. Chỗ ở hiện nay: </strong>
                    </div>
                    <div class="col">
                        <input type="text" class="dotted-line-input" required name="current_place">
                        <span class="error-message text-danger"></span>
                    </div>
                </div>
    
                <div class="row mb-2">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-auto">
                                <strong>10. Điện thoại: </strong>
                            </div>
                            <div class="col">
                                <input type="text" class="dotted-line-input" required name="phone_number">
                                <span class="error-message text-danger"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col-auto">
                                <strong>11. Email: </strong>
                            </div>
                            <div class="col">
                                <input type="text" class="dotted-line-input" required name="email">
                                <span class="error-message text-danger"></span>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="row mb-2">
                    <div class="col-auto">
                        <strong>12. Nghề nghiệp hiện tại: </strong>
                    </div>
                    <div class="col">
                        <input type="text" class="dotted-line-input" required name="current_job">
                        <span class="error-message text-danger"></span>
                    </div>
                </div>
    
                <div class="row mb-2">
                    <div class="col-auto">
                        <strong>13. Nơi làm việc: </strong>
                    </div>
                    <div class="col">
                        <input type="text" class="dotted-line-input" required name="workplace">
                        <span class="error-message text-danger"></span>
                    </div>
                </div>
    
                <div class="row mb-2">
                    <div class="col-auto">
                        <strong>14. CCCD: </strong>
                    </div>
                    <div class="col">
                        <input type="text" class="dotted-line-input" required name="id_card_number">
                        <span class="error-message text-danger"></span>
                    </div>
                </div>
    
                <div class="row mb-2">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-auto">
                                <strong>15. Ngày cấp: </strong>
                            </div>
                            <div class="col">
                                <input type="text" class="dotted-line-input datepicker" required placeholder="DD/MM/YYYY" name="id_card_date">
                                <span class="error-message text-danger"></span>
                                <span class="badge position-absolute" style="right:.5rem;top:0;pointer-events:none;">
                                    <i class="icon-calendar2"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col-auto">
                                <strong>16. Nơi cấp: </strong>
                            </div>
                            <div class="col">
                                <select class="select-box dotted-line-input" required required name="id_card_place">
                                    <option value="" hidden>Chọn tỉnh/ thành phố</option>
                                    <option value="Đà Nẵng" class="text-dark">Đà Nẵng</option>
                                </select>
                                <span class="error-message text-danger"></span>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="row mb-2">
                    <div class="col-12">
                        <strong>17. HOÀN CẢNH GIA ĐÌNH</strong> <br>
                        <strong class="text-muted">
                            (Ghi rõ họ tên, năm sinh, nghề nghiệp, nơi công tác của bố mẹ đẻ, anh chị em ruột, vợ chồng, con)
                        </strong>
                    </div>
                    <div class="col">
                        <table class="table table-bordered table-sm mt-2">
                            <thead class="bg-warning text-white">
                                <tr>
                                    <th scope="col" class="text-center">STT</th>
                                    <th scope="col" class="text-center">Quan hệ</th>
                                    <th scope="col" class="text-center">Họ và tên</th>
                                    <th scope="col" class="text-center">Năm sinh</th>
                                    <th scope="col" class="text-center">Nghề nghiệp</th>
                                    <th scope="col" class="text-center">Nơi công tác/học tập</th>
                                    <th scope="col" class="text-center">Đã mất</th>
                                    <th scope="col" class="text-center"></th>
                                </tr>
                            </thead>
                            <tbody class="family-members-container">
                                <tr class="add-family-member-button">
                                    <td colspan="8">
                                        <button type="button" class="btn btn-outline-primary btn-sm btn-block"
                                        onclick="add_family_member_row()">
                                            + Thêm dòng
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
    
                <div class="row mb-2">
                    <div class="col-12">
                        <strong>18. QUÁ TRÌNH HOẠT ĐỘNG CỦA BẢN THÂN</strong> <br>
                        <strong class="text-muted">
                            (Ghi rõ từ năm 18 tuổi đến nay. Ghi chú: Phải khai liền mạch quá trình hoạt động của bản thân)
                        </strong>
                    </div>
                    <div class="col">
                        <table class="table table-bordered table-sm mt-2">
                            <thead class="bg-warning text-white">
                                <tr>
                                    <th scope="col" class="text-center">STT</th>
                                    <th scope="col" class="text-center">Từ ngày tháng năm đến ngày tháng năm</th>
                                    <th scope="col" class="text-center">Làm công tác gì</th>
                                    <th scope="col" class="text-center">Nơi công tác/học tập</th>
                                    <th scope="col" class="text-center">Giữ chức vụ gì</th>
                                    <th scope="col" class="text-center">Ghi chú</th>
                                    <th scope="col" class="text-center"></th>
                                </tr>
                            </thead>
                            <tbody class="working-records-container">
                                <tr class="add-working-record-button">
                                    <td colspan="7">
                                        <button type="button" class="btn btn-outline-primary btn-sm btn-block"
                                        onclick="add_working_record_row()">
                                            + Thêm dòng
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
    
                <div class="row">
                    <div class="col">
                        <h5><strong class="text-warning">II. Thông tin hồ sơ tập sự</strong></h5>
                    </div>
                </div>
    
                <div class="row mb-2">
                    <div class="col-auto">
                        <strong>1. Số bằng cử nhân Luật: </strong>
                    </div>
                    <div class="col">
                        <input type="text" class="dotted-line-input" required name="law_degree_number">
                        <span class="error-message text-danger"></span>
                    </div>
                </div>
    
                <div class="row mb-2">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-auto">
                                <strong>2. Ngày cấp: </strong>
                            </div>
                            <div class="col">
                                <input type="text" class="dotted-line-input datepicker" required placeholder="DD/MM/YYYY" name="law_degree_date">
                                <span class="error-message text-danger"></span>
                                <span class="badge position-absolute" style="right:.5rem;top:0;pointer-events:none;">
                                    <i class="icon-calendar2"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-auto">
                                <strong>3. Nơi cấp: </strong>
                            </div>
                            <div class="col">
                                <input type="text" class="dotted-line-input" required name="law_degree_place">
                                <span class="error-message text-danger"></span>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="row mb-2">
                    <div class="col-auto">
                        <strong>4. Số giấy chứng nhận tốt nghiệp: </strong>
                    </div>
                    <div class="col">
                        <input type="text" class="dotted-line-input" required name="graduate_degree_number">
                        <span class="error-message text-danger"></span>
                    </div>
                </div>
    
                <div class="row mb-2">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-auto">
                                <strong>5. Ngày cấp: </strong>
                            </div>
                            <div class="col">
                                <input type="text" class="dotted-line-input datepicker" required 
                                placeholder="DD/MM/YYYY" name="graduate_degree_date">
                                <span class="error-message text-danger"></span>
                                <span class="badge position-absolute" style="right:.5rem;top:0;pointer-events:none;">
                                    <i class="icon-calendar2"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-auto">
                                <strong>6. Nơi cấp: </strong>
                            </div>
                            <div class="col">
                                <input type="text" class="dotted-line-input" required name="graduate_degree_place">
                                <span class="error-message text-danger"></span>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="row mb-2">
                    <div class="col-auto">
                        <strong>7. Thời gian tham dự khóa đào tạo nghề luật sư: </strong>
                    </div>
                    <div class="col">
                        <input type="text" class="dotted-line-input" required name="educated_duration">
                        <span class="error-message text-danger"></span>
                    </div>
                </div>
    
                <div class="row mb-2">
                    <div class="col-auto">
                        <strong>8. Số thẻ luật sư hướng dẫn: </strong>
                    </div>
                    <div class="col">
                        <input type="text" class="dotted-line-input" required name="instructor_number">
                        <span class="error-message text-danger"></span>
                    </div>
                </div>
    
                <div class="row mb-2">
                    <div class="col-12">
                        <strong>9. Khen thưởng - Kỷ luật: </strong> <br>
                        <strong class="text-muted">(Ghi rõ hình thức khen thưởng kỷ luật)</strong>
                    </div>
                    <div class="col">
                        <input type="text" class="dotted-line-input" required name="reward_and_discipline">
                        <span class="error-message text-danger"></span>
                    </div>
                </div>
    
                <div class="row mb-2">
                    <div class="col-12">
                        <strong>10. Bị truy cứu trách nhiệm hình sự: </strong> <br>
                        <strong class="text-muted">
                            (Ghi rõ có hay không việc bị truy cứu trách nhiệm hình sự; nếu đã bị truy cứu trách nhiệm hình sự thì ghi rõ tội danh, 
                            số bản án, cơ quan ra bản án và gửi kèm bản án, văn bản xác nhận xóa án tích của cơ quan có thẩm quyền)
                        </strong>
                    </div>
                    <div class="col">
                        <input type="text" class="dotted-line-input" required name="crime_record">
                        <span class="error-message text-danger"></span>
                    </div>
                </div>
    
                <div class="row mb-2">
                    <div class="col">
                        <strong>
                            Tôi làm Giấy đề nghị đăng ký này đề nghị Ban Chủ nhiệm xem xét cho tôi đăng ký tập sự hành nghề luật sư tại Đoàn 
                            Luật sư Đà Nẵng. Tôi cam kết không thuộc các trường hợp quy định tại khoản 2 Điều 3 Thông tư số 10/2021/TT-BTP ngày 
                            10/12/2021 của Bộ Tư pháp hướng dẫn tập sự hành nghề luật sư, chấp hành quy định của pháp luật về tập sự hành nghề 
                            luật sư, Điều lệ Liên đoàn Luật sư Việt Nam, Quy tắc đạo đức và ứng xử nghề nghiệp luật sư, Nội quy Đoàn Luật sư và 
                            các quy định khác của Liên đoàn Luật sư Việt Nam, Đoàn Luật sư và tổ chức hành nghề nơi tập sự. Tôi xin chịu trách 
                            nhiệm về những nội dung nêu trên và cam đoan thực hiện đầy đủ các quyền và nghĩa vụ của người tập sự hành luật sư do 
                            pháp luật quy định.
                        </strong>
                    </div>
                </div>
    
                <div class="row flex-column align-items-end mb-2">
                    <div class="col-auto text-right">
                        <input type="text" class="dotted-line-input" style="width:7rem" required name="city">
                        <strong>, {{ today()->format('\n\g\à\y d \t\h\á\n\g m \n\ă\m Y') }}</strong>
                    </div>
                    <div class="col-auto text-center mr-3">
                        <strong>Người đề nghị</strong> <br>
                        <strong class="text-muted">(Ký và ghi rõ họ tên)</strong>
                    </div>
                </div>
    
                <div class="row mb-4">
                    <div class="col-12">
                        <strong class="text-muted">Hồ sơ đính kèm</strong>
                    </div>
                    <div class="col">
                        <table class="table table-bordered mt-2" style="font-weight: 600">
                            <thead class="bg-light text-nowrap">
                                <tr>
                                    <th scope="col" class="text-center">STT</th>
                                    <th scope="col" class="text-center">Tên tài liệu</th>
                                    <th scope="col" class="text-center">File đính kèm</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($attachments = [
                                    'Giấy xác nhận của tổ chức hành nghề luật sư về việc nhận tập sự',
                                    'Bản sao giấy chứng nhận tốt nghiệp đào tạo nghề Luật sư',
                                    'Giấy tờ chứng minh thuộc trường hợp được giảm thời gian tập sự hành nghề luật sư (không bắt buộc)',
                                    'Sơ yếu lí lịch có xác nhận của địa phương (không bắt buộc)',
                                    'Quyết định thôi cán bộ công chức (không bắt buộc)',
                                    'Bằng cử nhân luật hoặc Bằng thạc sỹ luật (Bản sao)',
                                ])
                                @foreach ($attachments as $attachment)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-left">{{ $attachment }}</td>
                                    <td class="text-center">
                                        <input type="hidden" name="attachments[{{ $loop->iteration }}][name]" value="{{ $attachment }}">
                                        <input type="file" name="attachments[{{ $loop->iteration }}][files][]" class="d-none attachment-files" 
                                        multiple id="attachment_files_{{ $loop->iteration }}">
                                        <label type="button" class="m-0" for="attachment_files_{{ $loop->iteration }}">
                                            <span class="text-primary">0 file</span>
                                            <i class="icon-upload4 ml-2"></i>
                                        </label>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
    
                <div class="row mb-2">
                    <div class="col-auto">
                        <label class="custom-control custom-control-info custom-checkbox">
                            <input type="checkbox" class="custom-control-input agreement-checkbox" id="commitmentCheckbox">
                            <span class="custom-control-label p-0"></span>
                        </label>
                    </div>
                    <div class="col">
                        <strong>Tôi cam kết và chịu trách nhiệm nội dung kê khai và các file đính kèm đúng sự thật.</strong>
                    </div>
                </div>
    
                <div class="row mb-2">
                    <div class="col-auto">
                        <label class="custom-control custom-control-info custom-checkbox">
                            <input type="checkbox" class="custom-control-input" disabled id="termAndConditionCheckbox">
                            <span class="custom-control-label p-0"></span>
                        </label>
                    </div>
                    <div class="col">
                        <a href="#!" data-toggle="modal" data-target="#termAndCondition">
                            <strong>Cam kết tuân thủ Điều khoản và Điều Kiện Sử Dụng</strong>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-footer text-center">
                <button type="button" class="btn btn-warning btn-sm submit-btn" disabled onclick="validateAll('internForm')">
                    Đăng ký
                </button>
            </div>
        </div>
    </form>
</div>

@include('web.sections.intern.components.term-and-condition')

@endsection

@push('scripts')
<script src="https://unpkg.com/js-datepicker"></script>
<script src="{{ asset('custom_assets/js/document_form.js') }}"></script>
<script>
    $(document).ready(function() {
        $('body').on('focus', '.datepicker:not(.has-datepicker)', function() {
            this.classList.add("has-datepicker");
            datepicker(this, {
                startDay: 1,
                formatter: (input, date, instance) => {
                    input.value = date.toLocaleDateString('en-GB');
                },
                onSelect: (instance, date) => {
                    validate(this);
                },
            });
        });

        $('input[name="portrait_pic"]').change(function (e) {
            let file = this.files[0];
            if (file) {
                let reader = new FileReader();
                reader.onload = function (event) {
                    $('label[for="portraitPicture"]').html(`
                        <img src="${event.target.result}" class="w-100 h-100">
                    `);
                };
                reader.readAsDataURL(file);
            }
        });

        $('input.attachment-files').change(function(e) {
            let file_count = this.files.length;
            let input_id = $(this).attr('id');
            $(`label[for="${input_id}"]`).children('span').text(file_count + ' file');
        });

        $('#internForm input[type="text"]').on('input', function() {validate(this)});
        $('#internForm select').on('change', function() {validate(this)});

        $('input#agreeTermAndCondition').on('change', function() {
            $('input#termAndConditionCheckbox').prop('checked', $('input#agreeTermAndCondition').is(":checked"));
        })

        $('.check-agreement-btn').on('click', function() {
            if ($('input#agreeTermAndCondition').is(":checked")) {
                $('#termAndCondition').modal('hide');
            } else {
                new Noty({
                    text: 'Bạn phải đồng ý với điều khoản và cam kết',
                    type: 'warning',
                }).show();
            }
        });

        $('input.agreement-checkbox').on('change', function() {
            if ($('input.agreement-checkbox').not(':checked').length) {
                $('button.submit-btn').prop("disabled", true);
            } else {
                $('button.submit-btn').prop("disabled", false);
            }
        });
    });
</script>
@endpush