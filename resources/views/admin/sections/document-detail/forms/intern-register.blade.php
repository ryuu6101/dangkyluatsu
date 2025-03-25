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
        <div class="border border-dark d-flex align-items-center justify-content-center" 
        style="aspect-ratio: 3/4; width:8rem" for="portraitPicture">
            <img src="{{ asset($document->portrait_pic) }}" alt="" class="h-100 w-100">
        </div>
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

@php($sn = 1)
<div class="row mb-2">
    <div class="col-auto">
        <strong>{{ $sn++ }}. Tên tôi là (ghi bằng chữ in hoa): </strong>
    </div>
    <div class="col">
        <span class="text-uppercase">{{ $document->fullname }}</span>
    </div>
</div>

<div class="row mb-2">
    <div class="col-4">
        <div class="row">
            <div class="col-auto">
                <strong>{{ $sn++ }}. Giới tính: </strong>
            </div>
            <div class="col">
                <span>{{ $document->gender }}</span>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="row">
            <div class="col-auto">
                <strong>{{ $sn++ }}. Ngày sinh: </strong>
            </div>
            <div class="col">
                <span>{{ $document->birthday }}</span>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="row">
            <div class="col-auto">
                <strong>{{ $sn++ }}. Quốc tịch: </strong>
            </div>
            <div class="col">
                <span>{{ $document->nationality }}</span>
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
                <span>{{ $document->ethnic }}</span>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="row">
            <div class="col-auto">
                <strong>{{ $sn++ }}. Tôn giáo: </strong>
            </div>
            <div class="col">
                <span>{{ $document->religious }}</span>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="row">
            <div class="col-auto">
                <strong>{{ $sn++ }}. Nơi sinh: </strong>
            </div>
            <div class="col">
                <span>{{ $document->birthplace }}</span>
            </div>
        </div>
    </div>
</div>

<div class="row mb-2">
    <div class="col-auto">
        <strong>{{ $sn++ }}. Nơi thường trú: </strong>
    </div>
    <div class="col">
        <span>{{ $document->residence_place }}</span>
    </div>
</div>

<div class="row mb-2">
    <div class="col-auto">
        <strong>{{ $sn++ }}. Chỗ ở hiện nay: </strong>
    </div>
    <div class="col">
        <span>{{ $document->current_place }}</span>
    </div>
</div>

<div class="row mb-2">
    <div class="col-6">
        <div class="row">
            <div class="col-auto">
                <strong>{{ $sn++ }}. Điện thoại: </strong>
            </div>
            <div class="col">
                <span>{{ $document->phone_number }}</span>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="row">
            <div class="col-auto">
                <strong>{{ $sn++ }}. Email: </strong>
            </div>
            <div class="col">
                <span>{{ $document->email }}</span>
            </div>
        </div>
    </div>
</div>

<div class="row mb-2">
    <div class="col-auto">
        <strong>{{ $sn++ }}. Nghề nghiệp hiện tại: </strong>
    </div>
    <div class="col">
        <span>{{ $document->current_job }}</span>
    </div>
</div>

<div class="row mb-2">
    <div class="col-auto">
        <strong>{{ $sn++ }}. Nơi làm việc: </strong>
    </div>
    <div class="col">
        <span>{{ $document->workplace }}</span>
    </div>
</div>

<div class="row mb-2">
    <div class="col-auto">
        <strong>{{ $sn++ }}. CCCD: </strong>
    </div>
    <div class="col">
        <span>{{ $document->id_card_number }}</span>
    </div>
</div>

<div class="row mb-2">
    <div class="col-6">
        <div class="row">
            <div class="col-auto">
                <strong>{{ $sn++ }}. Ngày cấp: </strong>
            </div>
            <div class="col">
                <span>{{ $document->id_card_date }}</span>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="row">
            <div class="col-auto">
                <strong>{{ $sn++ }}. Nơi cấp: </strong>
            </div>
            <div class="col">
                <span>{{ $document->id_card_place }}</span>
            </div>
        </div>
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
                </tr>
            </thead>
            <tbody class="family-members-container">
                @foreach ($document->family_members as $family_member)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td class="text-center">{{ $family_member->relationship }}</td>
                    <td class="text-center">{{ $family_member->fullname }}</td>
                    <td class="text-center">{{ $family_member->birth_year }}</td>
                    <td class="text-center">{{ $family_member->job }}</td>
                    <td class="text-center">{{ $family_member->workplace }}</td>
                    <td class="text-center">{{ $family_member->deceased ? 'Có' : 'Không' }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="row mb-2">
    <div class="col-12">
        <strong>{{ $sn++ }}. QUÁ TRÌNH HOẠT ĐỘNG CỦA BẢN THÂN</strong> <br>
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
                </tr>
            </thead>
            <tbody class="working-records-container">
                @foreach ($document->working_records as $working_record)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td class="text-center">{{ $working_record->workspan }}</td>
                    <td class="text-center">{{ $working_record->job }}</td>
                    <td class="text-center">{{ $working_record->workplace }}</td>
                    <td class="text-center">{{ $working_record->position }}</td>
                    <td class="text-center">{{ $working_record->note }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="row">
    <div class="col">
        <h5><strong class="text-warning">II. Thông tin hồ sơ tập sự</strong></h5>
    </div>
</div>

@php($sn = 1)
<div class="row mb-2">
    <div class="col-auto">
        <strong>{{ $sn++ }}. Số bằng cử nhân Luật: </strong>
    </div>
    <div class="col">
        <span>{{ $document->law_degree->degree_number }}</span>
    </div>
</div>

<div class="row mb-2">
    <div class="col-6">
        <div class="row">
            <div class="col-auto">
                <strong>{{ $sn++ }}. Ngày cấp: </strong>
            </div>
            <div class="col">
                <span>{{ $document->law_degree->degree_date }}</span>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="row">
            <div class="col-auto">
                <strong>{{ $sn++ }}. Nơi cấp: </strong>
            </div>
            <div class="col">
                <span>{{ $document->law_degree->degree_place }}</span>
            </div>
        </div>
    </div>
</div>

<div class="row mb-2">
    <div class="col-auto">
        <strong>{{ $sn++ }}. Số giấy chứng nhận tốt nghiệp: </strong>
    </div>
    <div class="col">
        <span>{{ $document->graduate_degree->degree_number }}</span>
    </div>
</div>

<div class="row mb-2">
    <div class="col-6">
        <div class="row">
            <div class="col-auto">
                <strong>{{ $sn++ }}. Ngày cấp: </strong>
            </div>
            <div class="col">
                <span>{{ $document->graduate_degree->degree_date }}</span>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="row">
            <div class="col-auto">
                <strong>{{ $sn++ }}. Nơi cấp: </strong>
            </div>
            <div class="col">
                <span>{{ $document->graduate_degree->degree_place }}</span>
            </div>
        </div>
    </div>
</div>

<div class="row mb-2">
    <div class="col-auto">
        <strong>{{ $sn++ }}. Thời gian tham dự khóa đào tạo nghề luật sư: </strong>
    </div>
    <div class="col">
        <span>{{ $document->educated_duration }}</span>
    </div>
</div>

<div class="row mb-2">
    <div class="col-auto">
        <strong>{{ $sn++ }}. Số thẻ luật sư hướng dẫn: </strong>
    </div>
    <div class="col">
        <span>{{ $document->instructor_number }}</span>
    </div>
</div>

<div class="row mb-2">
    <div class="col-12">
        <strong>{{ $sn++ }}. Khen thưởng - Kỷ luật: </strong> <br>
        <strong class="text-muted">(Ghi rõ hình thức khen thưởng kỷ luật)</strong>
    </div>
    <div class="col">
        <span>{{ $document->reward_and_discipline }}</span>
    </div>
</div>

<div class="row mb-2">
    <div class="col-12">
        <strong>{{ $sn++ }}. Bị truy cứu trách nhiệm hình sự: </strong> <br>
        <strong class="text-muted">
            (Ghi rõ có hay không việc bị truy cứu trách nhiệm hình sự; nếu đã bị truy cứu trách nhiệm hình sự thì ghi rõ tội danh, 
            số bản án, cơ quan ra bản án và gửi kèm bản án, văn bản xác nhận xóa án tích của cơ quan có thẩm quyền)
        </strong>
    </div>
    <div class="col">
        <span>{{ $document->crime_record }}</span>
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

<div class="row justify-content-end mb-2">
    <div class="col-auto">
        <span>{{ $document->city }}</span>
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