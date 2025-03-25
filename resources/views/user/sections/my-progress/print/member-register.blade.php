<div class="form-container">
    <div class="row">
        <div class="col">
            <div class="text-center">
                <strong class="text-uppercase">CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</strong> <br>
                <strong class="">Độc lập - Tự do - Hạnh phúc</strong>
            </div>
        </div>
    </div>
    
    <div class="row align-items-stretch mb-4">
        <div class="col-2">
            <div class="border border-dark portrait-pic">
                <span>Ảnh 3x4</span>
            </div>
        </div>
        <div class="col-8">
            <div class="d-flex flex-column align-items-center justify-content-end h-100">
                <strong class="text-uppercase text-center header-title mb-3">
                    ĐƠN ĐỀ NGHỊ<br>GIA NHẬP ĐOÀN LUẬT SƯ
                </strong>
                <span class="text-center">
                    Kính gửi: Đoàn Luật sư TP. Đà Nẵng
                </span>
            </div>
        </div>
    </div>
    
    <div class="row mb-1">
        <div class="col-auto">Tên tôi là (<span class="font-italic">ghi bằng chữ in hoa</span>):</div>
        <div class="col field text-uppercase">{{ $document->fullname }}</div>
    </div>
    
    <div class="row mb-1">
        <div class="col-4">
            <div class="row">
                <div class="col-auto">Giới tính:</div>
                <div class="col field">{{ $document->gender }}</div>
            </div>
        </div>
        <div class="col-4">
            <div class="row">
                <div class="col-auto">Ngày sinh:</div>
                <div class="col field">{{ $document->birthday }}</div>
            </div>
        </div>
        <div class="col-4">
            <div class="row">
                <div class="col-auto">Nơi sinh:</div>
                <div class="col field">{{ $document->birthplace }}</div>
            </div>
        </div>
    </div>
    
    <div class="row mb-1">
        <div class="col-4">
            <div class="row">
                <div class="col-auto">Dân tộc:</div>
                <div class="col field">{{ $document->ethnic }}</div>
            </div>
        </div>
        <div class="col-4">
            <div class="row">
                <div class="col-auto">Tôn giáo:</div>
                <div class="col field">{{ $document->religious }}</div>
            </div>
        </div>
        <div class="col-4">
            <div class="row">
                <div class="col-auto">Quốc tịch:</div>
                <div class="col field">{{ $document->nationality }}</div>
            </div>
        </div>
    </div>
    
    <div class="row mb-1">
        @if ($document->residence_place)
        <div class="col">
            Hộ khẩu thường trú: {{ $document->residence_place }}
        </div>
        @else
        <div class="col-auto">Hộ khẩu thường trú:</div>
        <div class="col field"></div>
        <div class="col-12 field"></div>
        @endif
    </div>

    <div class="row mb-1">
        @if ($document->current_place)
        <div class="col">
            Chỗ ở hiện nay: {{ $document->current_place }}
        </div>
        @else
        <div class="col-auto">Chỗ ở hiện nay:</div>
        <div class="col field"></div>
        <div class="col-12 field"></div>
        @endif
    </div>
    
    <div class="row mb-1">
        <div class="col-6">
            <div class="row">
                <div class="col-auto">Điện thoại di động:</div>
                <div class="col field">{{ $document->phone_number }}</div>
            </div>
        </div>
        <div class="col-6">
            <div class="row">
                <div class="col-auto">Email:</div>
                <div class="col field">{{ $document->email }}</div>
            </div>
        </div>
    </div>
    
    <div class="row mb-1">
        <div class="col-auto">CMND/CCCD/Hộ chiếu số:</div>
        <div class="col field">{{ $document->id_card_number }}</div>
    </div>
    
    <div class="row mb-1">
        <div class="col-6">
            <div class="row">
                <div class="col-auto">Ngày cấp:</div>
                <div class="col field">{{ $document->id_card_date }}</div>
            </div>
        </div>
        <div class="col-6">
            <div class="row">
                <div class="col-auto">Nơi cấp:</div>
                <div class="col field">{{ $document->id_card_place }}</div>
            </div>
        </div>
    </div>
    
    <div class="row mb-1">
        <div class="col-auto">Trình độ giáo dục phổ thông:</div>
        <div class="col field">{{ $document->universal_level }}</div>
    </div>
    
    <div class="row mb-1">
        <div class="col-6">
            <div class="row">
                <div class="col-auto">Bằng Cử nhân luật số:</div>
                <div class="col field">{{ $document->law_degree->degree_number }}</div>
            </div>
        </div>
        <div class="col-6">
            <div class="row">
                <div class="col-auto">Loại hình đào tạo:</div>
                <div class="col field">{{ $document->educated_method }}</div>
            </div>
        </div>
    </div>
    
    <div class="row mb-1">
        <div class="col-6">
            <div class="row">
                <div class="col-auto">Nơi cấp:</div>
                <div class="col field">{{ $document->law_degree->degree_place }}</div>
            </div>
        </div>
        <div class="col-6">
            <div class="row">
                <div class="col-auto">Ngày cấp:</div>
                <div class="col field">{{ $document->law_degree->degree_date }}</div>
            </div>
        </div>
    </div>
    
    <div class="row mb-1">
        <div class="col-auto">Trình độ chuyên môn cao nhất được đào tạo:</div>
        <div class="col field">{{ $document->educated_expertise }}</div>
    </div>
    
    <div class="row mb-1">
        <div class="col-6">
            <div class="row">
                <div class="col-auto">Ngành học:</div>
                <div class="col field">{{ $document->educated_subject }}</div>
            </div>
        </div>
        <div class="col-6">
            <div class="row">
                <div class="col-auto">Nơi đào tạo:</div>
                <div class="col field">{{ $document->educated_place }}</div>
            </div>
        </div>
    </div>
    
    <div class="row mb-1">
        <div class="col-auto">Trình độ lý luận chính trị:</div>
        <div class="col field">{{ $document->political_level }}</div>
    </div>
    
    <div class="row mb-1">
        <div class="col-auto">Ngày vào Đoàn TNCS Hồ Chí Minh:</div>
        <div class="col field">{{ $document->union_joining_date }}</div>
    </div>
    
    <div class="row mb-1">
        <div class="col-6">
            <div class="row">
                <div class="col-auto">Ngày vào Đảng:</div>
                <div class="col field">{{ $document->vcp_temperary_date }}</div>
            </div>
        </div>
        <div class="col-6">
            <div class="row">
                <div class="col-auto">Ngày chính thức:</div>
                <div class="col field">{{ $document->vcp_offical_date }}</div>
            </div>
        </div>
    </div>
    
    <div class="row mb-5">
        <div class="col-auto">Chứng chỉ hành nghề luật sư số:</div>
        <div class="col field">{{ $document->law_certificate_number }}</div> 
        <div class="col-auto">do Bộ trưởng Bộ Tư pháp cấp ngày:</div>
        <div class="col field">{{ $document->law_certificate_date }}</div>
    </div>
    
    <div class="row mb-5">
        <div class="col text-center">
            <strong class="header-title">HOÀN CẢNH GIA ĐÌNH</strong> <br>
            <span class="font-italic">
                (Ghi rõ họ tên, năm sinh, nghề nghiệp, nơi công tác của bố mẹ đẻ, anh chị em ruột, vợ hoặc chồng, con)
            </span>

            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">Quan hệ</th>
                        <th scope="col" class="text-center">Họ và tên</th>
                        <th scope="col" class="text-center">Năm sinh</th>
                        <th scope="col" class="text-center">Nghề nghiệp</th>
                        <th scope="col" class="text-center">Nơi công tác/học tập</th>
                    </tr>
                </thead>
                <tbody class="family-members-container">
                    @foreach ($document->family_members as $family_member)
                    <tr>
                        <td class="text-center">{{ $family_member->relationship }}</td>
                        <td class="text-center">{{ $family_member->fullname }}</td>
                        <td class="text-center">{{ $family_member->birth_year }}</td>
                        <td class="text-center">{{ $family_member->job }}</td>
                        <td class="text-center">{{ $family_member->workplace }}</td>
                    </tr>
                    @endforeach
                    @for ($i = $document->family_members->count(); $i < 3; $i++)
                    <tr> <td>‎</td> <td></td> <td></td> <td></td> <td></td> </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="row mb-5">
        <div class="col text-center">
            <strong class="header-title text-uppercase">QUÁ TRÌNH HOẠT ĐỘNG CỦA BẢN THÂN</strong> <br>
            <span class="font-italic">
                (Ghi rõ thời gian, làm gì, ở đâu từ khi tốt nghiệp phổ thông trung học đến nay, chức danh, 
                chức vụ đảm nhiệm, thời gian đào tạo nghề luật sư và thời gian tập sự hành nghề luật sư (nếu có))
            </span>

            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">Từ ngày tháng năm đến ngày tháng năm</th>
                        <th scope="col" class="text-center">Làm công tác gì</th>
                        <th scope="col" class="text-center">Nơi công tác/học tập</th>
                        <th scope="col" class="text-center">Chức vụ</th>
                    </tr>
                </thead>
                <tbody class="working-records-container">
                    @foreach ($document->working_records as $working_record)
                    <tr>
                        <td class="text-center">{{ $working_record->workspan }}</td>
                        <td class="text-center">{{ $working_record->job }}</td>
                        <td class="text-center">{{ $working_record->workplace }}</td>
                        <td class="text-center">{{ $working_record->position }}</td>
                    </tr>
                    @endforeach
                    @for ($i = $document->working_records->count(); $i < 3; $i++)
                    <tr> <td>‎</td> <td></td> <td></td> <td></td> </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="row mb-5">
        <div class="col-12 text-center">
            <strong class="header-title text-uppercase">KHEN THƯỞNG - KỶ LUẬT</strong> <br>
            <span class="font-italic">
                (Ghi rõ hình thức khen thưởng, kỷ luật từ khi tốt nghiệp phổ thông trung học đến nay; 
                trường hợp kỷ luật thì ghi rõ lý do kỷ luật và kèm theo quyết định kỷ luật; trường hợp 
                không có khen thưởng, kỷ luật thì ghi rõ là không)
            </span>
        </div>
        <div class="col">
            <span>{{ $document->reward_and_discipline }}</span>
        </div>
    </div>
    
    @if ($document->first_time_join)
    <div class="row mb-1">
        <div class="col-auto">Ngày gia nhập lần đầu tiên:</div>
        <div class="col field">{{ $document->first_time_join }}</div>
    </div>
    @endif
    
    <div class="row mb-1">
        <div class="col">
            Nay tôi có nguyện vọng muốn trở thành luật sư của Đoàn Luật sư Đà Nẵng <br>
            Tôi làm Giấy này đề nghị Ban Chủ nhiệm xem xét kết nạp tôi vào Đoàn Luật sư. Tôi cam kết không 
            thuộc các trường hợp quy định tại khoản 4 Điều 17 của Luật Luật sư. <br>
            Nếu được kết nạp vào Đoàn Luật sư, tôi xin hứa: Chấp hành quy định của pháp luật, Điều lệ Liên 
            đoàn Luật sư Việt Nam, Quy tắc đạo đức và ứng xử nghề nghiệp luật sư, Nội quy Đoàn Luật sư và 
            các quy định khác của Liên đoàn Luật sư Việt Nam và Đoàn Luật sư. <br>
            Tôi xin cam đoan và chịu trách nhiệm về những nội dung nêu trên. Nếu có điều gì không đúng, 
            tôi xin chịu trách nhiệm hoàn toàn.
        </div>
    </div>
    
    <div class="row justify-content-end mb-2">
        <div class="col-auto text-center">
            <span>{{ $document->city }}, {{ today()->format('\n\g\à\y d \t\h\á\n\g m \n\ă\m Y') }}</span> <br>
            <strong>Người đề nghị</strong> <br>
            <span class="font-italic">(Ký và ghi rõ họ tên)</span>
        </div>
    </div>
</div>