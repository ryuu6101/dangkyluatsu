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
                    ĐƠN ĐỀ NGHỊ<br>ĐĂNG KÝ TẬP SỰ HÀNH NGHỀ<br>LUẬT SƯ
                </strong>
                <span class="text-center">
                    Kính gửi: Đoàn Luật sư thành phố Đà Nẵng
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
                <div class="col-auto">Quốc tịch:</div>
                <div class="col field">{{ $document->nationality }}</div>
            </div>
        </div>
    </div>

    <div class="row mb-1">
        @if ($document->residence_place)
        <div class="col">
            Nơi đăng ký hộ khẩu thường trú: {{ $document->residence_place }}
        </div>
        @else
        <div class="col-auto">Nơi đăng ký hộ khẩu thường trú:</div>
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
                <div class="col-auto">Điện thoại:</div>
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
        <div class="col-auto">Nghề nghiệp hiện tại:</div>
        <div class="col field">{{ $document->current_job }}</div>
    </div>

    <div class="row mb-1">
        <div class="col-auto">Nơi làm việc:</div>
        <div class="col field">{{ $document->workplace }}</div>
    </div>

    <div class="row mb-1">
        <div class="col-auto">CMND/CCCD số:</div>
        <div class="col field">{{ $document->id_card_number }}</div>
    </div>

    <div class="row mb-1">
        <div class="col-6">
            <div class="row">
                <div class="col-auto">Ngày cấp:</div>
                <div class="col field">{{ $document->id_card_date }}</div>
            </div>
        </div>
        <div class="col">
            <div class="row">
                <div class="col-auto">Nơi cấp:</div>
                <div class="col field">{{ $document->id_card_place }}</div>
            </div>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-auto">Thời gian học khóa học đào tạo nghề luật sư:</div>
        <div class="col field">{{ $document->educated_duration }}</div>
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
                (ghi rõ từ năm 18 tuổi đến nay)
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
                (ghi rõ hình thức khen thưởng, kỷ luật)
            </span>
        </div>
        <div class="col">
            <span>{{ $document->reward_and_discipline }}</span>
        </div>
    </div>

    <div class="row mb-1">
        <div class="col">
            Tôi làm Giấy đề nghị đăng ký này đề nghị Ban Chủ nhiệm xem xét cho tôi đăng ký tập sự hành nghề luật sư tại Đoàn 
            Luật sư Đà Nẵng. Tôi cam kết không thuộc các trường hợp quy định tại khoản 2 Điều 3 Thông tư số 10/2021/TT-BTP ngày 
            10/12/2021 của Bộ Tư pháp hướng dẫn tập sự hành nghề luật sư, chấp hành quy định của pháp luật về tập sự hành nghề 
            luật sư, Điều lệ Liên đoàn Luật sư Việt Nam, Quy tắc đạo đức và ứng xử nghề nghiệp luật sư, Nội quy Đoàn Luật sư và 
            các quy định khác của Liên đoàn Luật sư Việt Nam, Đoàn Luật sư và tổ chức hành nghề nơi tập sự. Tôi xin chịu trách 
            nhiệm về những nội dung nêu trên và cam đoan thực hiện đầy đủ các quyền và nghĩa vụ của người tập sự hành luật sư do 
            pháp luật quy định.
        </div>
    </div>

    <div class="row mb-1">
        <div class="col text-indent">
            Tôi xin chịu trách nhiệm về những nội dung nêu trên và cam đoan thực hiện đầy đủ các quyền và nghĩa vụ của người tập sự 
            hành luật sư do pháp luật quy định.
        </div>
    </div>

    <div class="row justify-content-end mb-1">
        <div class="col-auto text-center">
            <span>{{ $document->city }}, {{ today()->format('\n\g\à\y d \t\h\á\n\g m \n\ă\m Y') }}</span> <br>
            <strong>Người đề nghị</strong> <br>
            <span class="font-italic">(Ký và ghi rõ họ tên)</span>
        </div>
    </div>
</div>