@push('styles')
<link rel="stylesheet" href="{{ asset('custom_assets/css/document_form.css') }}">
@endpush

<div id="documentFormModal" class="modal fade" tabindex="-1" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>

            <div class="modal-body px-5">
                <form action="{{ route('member-register.post') }}" autocomplete="off" class="document-form" 
                novalidate method="post" id="memberRegisterForm" enctype="multipart/form-data">
                    @method("post")
                    @csrf
                    <input type="hidden" name="return_back" value="1">
                    <input type="hidden" name="document_type_id" value="2">
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
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
        
                    @php($user = auth()->guard('web')->user())
                    <div class="row mb-3">
                        <div class="col-2">
                            <input type="hidden" name="portrait_pic" value="{{ $user->profile_pic }}">
                            <div class="border border-dark" style="aspect-ratio: 3/4; width:8rem">
                                <img src="{{ asset($user->profile_pic) }}" alt="" class="h-100 w-100">
                            </div>
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
                            <input type="text" class="dotted-line-input text-uppercase" name="fullname" readonly value="{{ $user->fullname }}">
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
                                    <input type="text" class="dotted-line-input" name="gender" readonly value="{{ $user->gender }}">
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
                                    <input type="text" class="dotted-line-input" name="birthday" readonly value="{{ $user->birthday }}">
                                    <span class="error-message text-danger"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row">
                                <div class="col-auto">
                                    <strong>{{ $sn++ }}. Quốc tịch: </strong>
                                </div>
                                <div class="col">
                                    <input type="text" class="dotted-line-input" name="nationality" readonly value="{{ $user->nationality }}">
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
                                    <input type="text" class="dotted-line-input" name="ethnic" readonly value="{{ $user->ethnic }}">
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
                                    <input type="text" class="dotted-line-input" name="religious" readonly value="{{ $user->religious }}">
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
                                    <input type="text" class="dotted-line-input" name="birthplace" readonly value="{{ $user->birthplace }}">
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
                            <input type="text" class="dotted-line-input" name="residence_place" readonly value="{{ $user->residence_place }}">
                            <span class="error-message text-danger"></span>
                        </div>
                    </div>
        
                    <div class="row mb-2">
                        <div class="col-auto">
                            <strong>{{ $sn++ }}. Chỗ ở hiện nay: </strong>
                        </div>
                        <div class="col">
                            <input type="text" class="dotted-line-input" name="current_place" readonly value="{{ $user->current_place }}">
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
                                    <input type="text" class="dotted-line-input" name="phone_number" readonly value="{{ $user->phone_number }}">
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
                                    <input type="text" class="dotted-line-input" name="email" readonly value="{{ $user->email }}">
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
                            <input type="text" class="dotted-line-input" name="id_card_number" readonly value="{{ $user->id_card_number }}">
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
                                    <input type="text" class="dotted-line-input" name="id_card_date" readonly value="{{ $user->id_card_date }}">
                                    <span class="error-message text-danger"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-auto">
                                    <strong>{{ $sn++ }}. Nơi cấp: </strong>
                                </div>
                                <div class="col">
                                    <input type="text" class="dotted-line-input" name="id_card_place" readonly value="{{ $user->id_card_place }}">
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
                                    <input type="text" class="dotted-line-input" name="degrees[1][degree_number]" 
                                    readonly value="{{ $user->law_degree->degree_number }}">
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
                                    <input type="text" class="dotted-line-input" name="degrees[1][degree_place]" 
                                    readonly value="{{ $user->law_degree->degree_place }}">
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
                                    <input type="text" class="dotted-line-input" name="degrees[1][degree_date]" 
                                    readonly value="{{ $user->law_degree->degree_date }}">
                                    <span class="error-message text-danger"></span>
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
                            <input type="text" class="dotted-line-input" required name="law_certificate_number" style="width:8rem">
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
                                    @foreach ($user->family_members as $family_member)
                                    <tr class="family-member-row">
                                        <td class="text-center sn-cell">{{ $loop->iteration }}</td>
                                        <td class="text-center">
                                            <input type="text" class="form-control form-control-sm" readonly 
                                            name="family_members[{{ $loop->iteration }}][relationship]" value="{{ $family_member->relationship }}">
                                            <span class="error-message text-danger"></span>
                                        </td>
                                        <td class="text-center">
                                            <input type="text" class="form-control form-control-sm" readonly 
                                            name="family_members[{{ $loop->iteration }}][fullname]" value="{{ $family_member->fullname }}">
                                            <span class="error-message text-danger"></span>
                                        </td>
                                        <td class="text-center">
                                            <input type="text" class="form-control form-control-sm" readonly 
                                            name="family_members[{{ $loop->iteration }}][birth_year]" value="{{ $family_member->birth_year }}">
                                            <span class="error-message text-danger"></span>
                                        </td>
                                        <td class="text-center">
                                            <input type="text" class="form-control form-control-sm" readonly 
                                            name="family_members[{{ $loop->iteration }}][job]" value="{{ $family_member->job }}">
                                            <span class="error-message text-danger"></span>
                                        </td>
                                        <td class="text-center">
                                            <input type="text" class="form-control form-control-sm" readonly 
                                            name="family_members[{{ $loop->iteration }}][workplace]" value="{{ $family_member->workplace }}">
                                            <span class="error-message text-danger"></span>
                                        </td>
                                        <td class="text-center">
                                            <div class="custom-control custom-control-warning custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" @checked($family_member->deceased) 
                                                name="family_members[{{ $loop->iteration }}][workplace]" value="1" disabled>
                                                <label class="custom-control-label p-0"></label>
                                            </div>
                                        </td>
                                        <td class="text-center"></td>
                                    </tr>
                                    @endforeach
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
                                    @foreach ($user->working_records as $working_record)
                                    <tr class="working-record-row">
                                        <td class="text-center sn-cell">{{ $loop->iteration }}</td>
                                        <td class="text-center">
                                            <input type="text" class="form-control form-control-sm" readonly 
                                            name="working_records[{{ $loop->iteration }}][workspan]" value="{{ $working_record->workspan }}">
                                            <span class="error-message text-danger"></span>
                                        </td>
                                        <td class="text-center">
                                            <input type="text" class="form-control form-control-sm" readonly 
                                            name="working_records[{{ $loop->iteration }}][job]" value="{{ $working_record->job }}">
                                            <span class="error-message text-danger"></span>
                                        </td>
                                        <td class="text-center">
                                            <input type="text" class="form-control form-control-sm" readonly 
                                            name="working_records[{{ $loop->iteration }}][workplace]" value="{{ $working_record->workplace }}">
                                            <span class="error-message text-danger"></span>
                                        </td>
                                        <td class="text-center">
                                            <input type="text" class="form-control form-control-sm" readonly 
                                            name="working_records[{{ $loop->iteration }}][position]" value="{{ $working_record->position }}">
                                            <span class="error-message text-danger"></span>
                                        </td>
                                        <td class="text-center">
                                            <input type="text" class="form-control form-control-sm" readonly 
                                            name="working_records[{{ $loop->iteration }}][note]" value="{{ $working_record->note }}">
                                            <span class="error-message text-danger"></span>
                                        </td>
                                        <td class="text-center"></td>
                                    </tr>
                                    @endforeach
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
                                    @php($attachments = [
                                        'Bản sao chứng chỉ hành nghề luật sư',
                                        'Phiếu lý lịch tư pháp (Trường hợp chứng chỉ hành nghề luật sư quá 6 tháng) (không bắt buộc)',
                                        'Bản sao Quyết định nghỉ hưu hoặc Giấy xác nhận không phải là công chức (không bắt buộc)',
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
                </form>
            </div>

            <div class="modal-footer justify-content-center border-top pt-2">
                <button type="button" class="btn btn-warning btn-sm submit-btn" disabled onclick="openSecondaryForm('memberRegisterForm')">
                    Đăng ký
                </button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script src="{{ asset('custom_assets/js/document_form.js') }}"></script>
<script>
    let family_member_count = {{ $user->family_members->count() }};
    let working_record_count = {{ $user->working_records->count() }};

    function submit(formId) {
        if (validateAll(formId)) $('form#'+formId).trigger('submit');
    }

    $(document).ready(function() {
        $('body').on('focus', '.datepicker:not(.has-datepicker)', function() {
            this.classList.add("has-datepicker");
            $(this).daterangepicker({
                parentEl: '#documentFormModal .modal-body',
                singleDatePicker: true,
                showDropdowns: true,
                autoUpdateInput: false,
                autoApply: true,
                buttonClasses: 'd-none',
            }).on('apply.daterangepicker', function(ev, picker) {
                $(this).val(picker.startDate.format('DD/MM/YYYY')).trigger('input');
            }).on('cancel.daterangepicker', function(ev, picker) {
                $(this).val('').trigger('input');
            });
        }).on('focus', '.daterange-picker:not(.has-datepicker)', function() {
            this.classList.add("has-datepicker");
            $(this).daterangepicker({
                parentEl: '#documentFormModal .modal-body',
                showDropdowns: true,
                autoUpdateInput: false,
                autoApply: true,
                buttonClasses: 'd-none',
                maxDate: moment().format('MM/DD/YYYY'),
            }).on('apply.daterangepicker', function(ev, picker) {
                let start_date = picker.startDate.format('DD/MM/YYYY');
                let end_date = picker.endDate.format('DD/MM/YYYY');
                $(this).val(start_date + ' - ' + end_date).trigger('input');
            }).on('cancel.daterangepicker', function(ev, picker) {
                $(this).val('').trigger('input');
            });
        });

        $('input.attachment-files').change(function(e) {
            let file_count = this.files.length;
            let input_id = $(this).attr('id');
            $(`label[for="${input_id}"]`).children('span').text(file_count + ' file');
        });

        // $('input[type="text"],input[type="number"]').on('input', function() {validate(this)});
        // $('select').on('change', function() {validate(this)});
        $('input[type="text"],input[type="number"]').on('input', function() {
            if (validate(this) && $(`input[name="secondary_form[${this.getAttribute('name')}]"]`).length) {
                $(`input[name="secondary_form[${this.getAttribute('name')}]"]`).val(this.value);
            }
        });
        $('select').on('change', function() {
            if (validate(this) && $(`input[name="secondary_form[${this.getAttribute('name')}]"]`).length) {
                $(`input[name="secondary_form[${this.getAttribute('name')}]"]`).val(this.value);
            }
        });

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

        $('input.agreement-checkbox-secondary').on('change', function() {
            if ($('input.agreement-checkbox-secondary').not(':checked').length) {
                $('button.submit-btn-secondary').prop("disabled", true);
            } else {
                $('button.submit-btn-secondary').prop("disabled", false);
            }
        });

        $('select[name="secondary_form[organization_id]"]').on('change', function() {
            $.ajax({
                url: "{{ route('get-organization') }}",
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    id: $(this).val(),
                },
                success: function(data) {
                    $('.organ-address').text(data.address ?? '');
                    $('.organ-phone').text(data.phone ?? '');
                    $('.organ-mobile').text(data.mobile ?? '');
                    $('.organ-fax').text(data.fax ?? '');
                    $('.organ-email').text(data.email ?? '');
                },
            });
        });
    });
</script>
@endpush