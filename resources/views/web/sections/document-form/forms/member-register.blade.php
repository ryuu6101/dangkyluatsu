<div class="container">
    <form action="{{ route('member-register.post') }}" autocomplete="off" class="document-form" 
    novalidate method="post" id="memberRegisterForm" enctype="multipart/form-data">
        @method("post")
        @csrf
        <input type="hidden" name="document_type_id" value="2">
        <div class="card shadow mt-5">
            <div class="card-body" style="padding: 1.25rem 6rem">
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
                                    GIẤY ĐỀ NGHỊ <br> GIA NHẬP ĐOÀN LUẬT SƯ
                                </strong> <br>
                            </h3>
                            <span class="mt-5">
                                <strong class="">Kính gửi: Ban Chủ nhiệm Đoàn Luật sư TP. Đà Nẵng</strong>
                            </span>
                        </div>
                    </div>
                </div>
    
                @php($sn = 1)
                <div class="row flex-nowrap mb-2">
                    <div class="col-auto">
                        <strong>{{ $sn++ }}. Tên tôi là (ghi bằng chữ in hoa): </strong>
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
                                <strong>{{ $sn++ }}. Giới tính: </strong>
                            </div>
                            <div class="col">
                                <select class="select-box dotted-line-input" required name="gender">
                                    <option value="" hidden>Chọn</option>
                                    <option value="Nam" class="text-dark">Nam</option>
                                    <option value="Nữ" class="text-dark">Nữ</option>
                                    <option value="Khác" class="text-dark">Khác</option>
                                </select>
                                <span class="error-message text-danger"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="col-auto">
                                <strong>{{ $sn++ }}. Ngày sinh: </strong>
                            </div>
                            <div class="col">
                                <input type="text" class="dotted-line-input datepicker" required placeholder="DD/MM/YYYY" name="birthday">
                                <span class="error-message text-danger"></span>
                                <span class="badge position-absolute calendar-icon">
                                    <i class="icon-calendar2"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="col-auto">
                                <strong>{{ $sn++ }}. Quốc tịch: </strong>
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
                                <strong>{{ $sn++ }}. Dân tộc: </strong>
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
                                <strong>{{ $sn++ }}. Tôn giáo: </strong>
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
                                <strong>{{ $sn++ }}. Nơi sinh: </strong>
                            </div>
                            <div class="col">
                                <input type="text" class="dotted-line-input" required name="birthplace">
                                {{-- <select class="select-box dotted-line-input" required name="birthplace">
                                    <option value="" hidden>Chọn</option>
                                    <option value="Đà Nẵng" class="text-dark">Đà Nẵng</option>
                                </select> --}}
                                <span class="error-message text-danger"></span>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="row mb-2">
                    <div class="col-auto">
                        <strong>{{ $sn++ }}. Nơi thường trú: </strong>
                    </div>
                    <div class="col">
                        <input type="text" class="dotted-line-input" required name="residence_place">
                        <span class="error-message text-danger"></span>
                    </div>
                </div>
    
                <div class="row mb-2">
                    <div class="col-auto">
                        <strong>{{ $sn++ }}. Chỗ ở hiện nay: </strong>
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
                                <strong>{{ $sn++ }}. Điện thoại: </strong>
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
                                <strong>{{ $sn++ }}. Email: </strong>
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
                        <strong>{{ $sn++ }}. Nghề nghiệp trước đây: </strong>
                    </div>
                    <div class="col">
                        <input type="text" class="dotted-line-input" required name="previous_job">
                        <span class="error-message text-danger"></span>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-auto">
                        <strong>{{ $sn++ }}. CCCD: </strong>
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
                                <strong>{{ $sn++ }}. Ngày cấp: </strong>
                            </div>
                            <div class="col">
                                <input type="text" class="dotted-line-input datepicker" required placeholder="DD/MM/YYYY" name="id_card_date">
                                <span class="error-message text-danger"></span>
                                <span class="badge position-absolute calendar-icon">
                                    <i class="icon-calendar2"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-auto">
                                <strong>{{ $sn++ }}. Nơi cấp: </strong>
                            </div>
                            <div class="col">
                                <input type="text" class="dotted-line-input" required name="id_card_place">
                                {{-- <select class="select-box dotted-line-input" required required name="id_card_place">
                                    <option value="" hidden>Chọn tỉnh/ thành phố</option>
                                    <option value="Đà Nẵng" class="text-dark">Đà Nẵng</option>
                                </select> --}}
                                <span class="error-message text-danger"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-auto">
                        <strong>{{ $sn++ }}. Trình độ giáo dục phổ thông: </strong>
                    </div>
                    <div class="col">
                        <input type="text" class="dotted-line-input" required name="universal_level">
                        <span class="error-message text-danger"></span>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-auto">
                                <strong>{{ $sn++ }}. Bằng Cử nhân luật số: </strong>
                            </div>
                            <div class="col">
                                <input type="hidden" name="degrees[1][degree_type_id]" value="1">
                                <input type="text" class="dotted-line-input" required name="degrees[1][degree_number]">
                                <span class="error-message text-danger"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-auto">
                                <strong>{{ $sn++ }}. Loại hình đào tạo: </strong>
                            </div>
                            <div class="col">
                                <input type="text" class="dotted-line-input" required name="educated_method">
                                <span class="error-message text-danger"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-auto">
                                <strong>{{ $sn++ }}. Nơi cấp: </strong>
                            </div>
                            <div class="col">
                                <input type="text" class="dotted-line-input" required name="degrees[1][degree_place]">
                                <span class="error-message text-danger"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-auto">
                                <strong>{{ $sn++ }}. Ngày cấp: </strong>
                            </div>
                            <div class="col">
                                <input type="text" class="dotted-line-input datepicker" required 
                                placeholder="DD/MM/YYYY" name="degrees[1][degree_date]">
                                <span class="error-message text-danger"></span>
                                <span class="badge position-absolute calendar-icon">
                                    <i class="icon-calendar2"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-auto">
                        <strong>{{ $sn++ }}. Trình độ chuyên môn cao nhất được đào tạo: </strong>
                    </div>
                    <div class="col">
                        <input type="text" class="dotted-line-input" required name="educated_expertise">
                        <span class="error-message text-danger"></span>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-auto">
                                <strong>{{ $sn++ }}. Ngành học: </strong>
                            </div>
                            <div class="col">
                                <input type="text" class="dotted-line-input" required name="educated_subject">
                                <span class="error-message text-danger"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-auto">
                                <strong>{{ $sn++ }}. Nơi đào tạo: </strong>
                            </div>
                            <div class="col">
                                <input type="text" class="dotted-line-input" required name="educated_place">
                                <span class="error-message text-danger"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-auto">
                        <strong>{{ $sn++ }}. Trình độ lý luận chính trị: </strong>
                    </div>
                    <div class="col">
                        <input type="text" class="dotted-line-input" name="political_level">
                        <span class="error-message text-danger"></span>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-auto">
                        <strong>{{ $sn++ }}. Ngày vào Đoàn TNCS Hồ Chí Minh: </strong>
                    </div>
                    <div class="col">
                        <input type="text" class="dotted-line-input datepicker" placeholder="DD/MM/YYYY" name="union_joining_date">
                        <span class="error-message text-danger"></span>
                        <span class="badge position-absolute calendar-icon">
                            <i class="icon-calendar2"></i>
                        </span>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-auto">
                                <strong>{{ $sn++ }}. Ngày vào Đảng (dự bị): </strong>
                            </div>
                            <div class="col">
                                <input type="text" class="dotted-line-input datepicker" placeholder="DD/MM/YYYY" name="vcp_temperary_date">
                                <span class="error-message text-danger"></span>
                                <span class="badge position-absolute calendar-icon">
                                    <i class="icon-calendar2"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-auto">
                                <strong>{{ $sn++ }}. Ngày chính thức: </strong>
                            </div>
                            <div class="col">
                                <input type="text" class="dotted-line-input datepicker" placeholder="DD/MM/YYYY" name="vcp_offical_date">
                                <span class="error-message text-danger"></span>
                                <span class="badge position-absolute calendar-icon">
                                    <i class="icon-calendar2"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-auto">
                        <strong>{{ $sn++ }}. Chứng chỉ hành nghề luật sư số: </strong>
                    </div>
                    <div class="col-auto">
                        <input type="text" class="dotted-line-input" required name="law_certificate_number" style="width:10rem">
                        <span class="error-message text-danger"></span>
                    </div>
                    <div class="col-auto">
                        <strong> do Bộ trưởng Bộ Tư pháp cấp ngày: </strong>
                    </div>
                    <div class="col">
                        <input type="text" class="dotted-line-input datepicker" required placeholder="DD/MM/YYYY" name="law_certificate_date">
                        <span class="error-message text-danger"></span>
                        <span class="badge position-absolute calendar-icon">
                            <i class="icon-calendar2"></i>
                        </span>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-12">
                        <strong>{{ $sn++ }}. HOÀN CẢNH GIA ĐÌNH</strong> <br>
                        <strong class="text-muted">
                            (Ghi rõ họ tên, năm sinh, nghề nghiệp, nơi công tác của bố mẹ đẻ, anh chị em ruột, vợ hoặc chồng, con)
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
                        <strong>{{ $sn++ }}. QUÁ TRÌNH HOẠT ĐỘNG CỦA BẢN THÂN</strong> <br>
                        <strong class="text-muted">
                            (Ghi rõ thời gian, làm gì, ở đâu từ khi tốt nghiệp phổ thông trung học đến nay, chức danh, 
                            chức vụ đảm nhiệm, thời gian đào tạo nghề luật sư và thời gian tập sự hành nghề luật sư (nếu có))
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
    
                <div class="row mb-2">
                    <div class="col-12">
                        <strong>{{ $sn++ }}. Khen thưởng - Kỷ luật: </strong> <br>
                        <strong class="text-muted">
                            (Ghi rõ hình thức khen thưởng, kỷ luật từ khi tốt nghiệp phổ thông trung học đến nay; 
                            trường hợp kỷ luật thì ghi rõ lý do kỷ luật và kèm theo quyết định kỷ luật; trường hợp 
                            không có khen thưởng, kỷ luật thì ghi rõ là không)
                        </strong>
                    </div>
                    <div class="col">
                        <input type="text" class="dotted-line-input" required name="reward_and_discipline">
                        <span class="error-message text-danger"></span>
                    </div>
                </div>

                @if ($option == 'luat-su-chuyen-tu-doan-khac-ve')
                <div class="row mb-2">
                    <div class="col-auto">
                        <strong>{{ $sn++ }}. Ngày gia nhập lần đầu tiên: </strong>
                    </div>
                    <div class="col">
                        <input type="text" class="dotted-line-input datepicker" required placeholder="DD/MM/YYYY" name="first_time_join">
                        <span class="error-message text-danger"></span>
                        <span class="badge position-absolute calendar-icon">
                            <i class="icon-calendar2"></i>
                        </span>
                    </div>
                </div>
                @endif
    
                <div class="row mb-2">
                    <div class="col">
                        <strong>
                            Nay tôi có nguyện vọng muốn trở thành luật sư của Đoàn Luật sư Đà Nẵng <br>
                            Tôi làm Giấy này đề nghị Ban Chủ nhiệm xem xét kết nạp tôi vào Đoàn Luật sư. Tôi cam kết không 
                            thuộc các trường hợp quy định tại khoản 4 Điều 17 của Luật Luật sư. <br>
                            Nếu được kết nạp vào Đoàn Luật sư, tôi xin hứa: Chấp hành quy định của pháp luật, Điều lệ Liên 
                            đoàn Luật sư Việt Nam, Quy tắc đạo đức và ứng xử nghề nghiệp luật sư, Nội quy Đoàn Luật sư và 
                            các quy định khác của Liên đoàn Luật sư Việt Nam và Đoàn Luật sư. <br>
                            Tôi xin cam đoan và chịu trách nhiệm về những nội dung nêu trên. Nếu có điều gì không đúng, 
                            tôi xin chịu trách nhiệm hoàn toàn.
                        </strong>
                    </div>
                </div>
    
                <div class="row justify-content-end mb-2">
                    <div class="col-auto" style="width:8rem">
                        <input type="text" class="dotted-line-input" required name="city">
                        <span class="text-danger error-message"></span>
                    </div>
                    <div class="col-auto">
                        <strong>, {{ today()->format('\n\g\à\y d \t\h\á\n\g m \n\ă\m Y') }}</strong>
                    </div>
                </div>
                <div class="row justify-content-end mb-2">
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
                        <label class="custom-control custom-checkbox">
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
                        <label class="custom-control custom-checkbox">
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
                <button type="button" class="btn btn-warning btn-sm submit-btn" disabled onclick="openSecondaryForm('memberRegisterForm')">
                    Đăng ký
                </button>
            </div>
        </div>
    </form>
</div>