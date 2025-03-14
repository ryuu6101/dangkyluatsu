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
                <span>{{ [0 => 'Nam', 1 => 'Nữ', 2 => 'Khác'][$document->gender] }}</span>
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
        <strong>{{ $sn++ }}. Nghề nghiệp trước đây: </strong>
    </div>
    <div class="col">
        <span>{{ $document->previous_job }}</span>
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
    <div class="col-auto">
        <strong>{{ $sn++ }}. Trình độ giáo dục phổ thông: </strong>
    </div>
    <div class="col">
        <span>{{ $document->universal_level }}</span>
    </div>
</div>

<div class="row mb-2">
    <div class="col-6">
        <div class="row">
            <div class="col-auto">
                <strong>{{ $sn++ }}. Bằng Cử nhân luật số: </strong>
            </div>
            <div class="col">
                <span>{{ $document->law_degree->degree_number }}</span>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="row">
            <div class="col-auto">
                <strong>{{ $sn++ }}. Loại hình đào tạo: </strong>
            </div>
            <div class="col">
                <span>{{ $document->educated_method }}</span>
            </div>
        </div>
    </div>
</div>

<div class="row mb-2">
    <div class="col">
        <div class="row">
            <div class="col-auto">
                <strong>{{ $sn++ }}. Nơi cấp: </strong>
            </div>
            <div class="col">
                <span>{{ $document->law_degree->degree_place }}</span>
            </div>
        </div>
    </div>
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
</div>

<div class="row mb-2">
    <div class="col-auto">
        <strong>{{ $sn++ }}. Trình độ chuyên môn cao nhất được đào tạo: </strong>
    </div>
    <div class="col">
        <span>{{ $document->educated_expertise }}</span>
    </div>
</div>

<div class="row mb-2">
    <div class="col">
        <div class="row">
            <div class="col-auto">
                <strong>{{ $sn++ }}. Ngành học: </strong>
            </div>
            <div class="col">
                <span>{{ $document->educated_subject }}</span>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="row">
            <div class="col-auto">
                <strong>{{ $sn++ }}. Nơi đào tạo: </strong>
            </div>
            <div class="col">
                <span>{{ $document->educated_place }}</span>
            </div>
        </div>
    </div>
</div>

<div class="row mb-2">
    <div class="col-auto">
        <strong>{{ $sn++ }}. Trình độ lý luận chính trị: </strong>
    </div>
    <div class="col">
        <span>{{ $document->political_level }}</span>
    </div>
</div>

<div class="row mb-2">
    <div class="col-auto">
        <strong>{{ $sn++ }}. Ngày vào Đoàn TNCS Hồ Chí Minh: </strong>
    </div>
    <div class="col">
        <span>{{ $document->union_joining_date }}</span>
    </div>
</div>

<div class="row mb-2">
    <div class="col">
        <div class="row">
            <div class="col-auto">
                <strong>{{ $sn++ }}. Ngày vào Đảng (dự bị): </strong>
            </div>
            <div class="col">
                <span>{{ $document->vcp_temperary_date }}</span>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="row">
            <div class="col-auto">
                <strong>{{ $sn++ }}. Ngày chính thức: </strong>
            </div>
            <div class="col">
                <span>{{ $document->vcp_offical_date }}</span>
            </div>
        </div>
    </div>
</div>

<div class="row mb-2">
    <div class="col-auto">
        <strong>{{ $sn++ }}. Chứng chỉ hành nghề luật sư số: </strong>
    </div>
    <div class="col-auto">
        <span>{{ $document->law_certificate_number }}</span>
    </div>
    <div class="col-auto">
        <strong> do Bộ trưởng Bộ Tư pháp cấp ngày: </strong>
    </div>
    <div class="col">
        <span>{{ $document->law_certificate_date }}</span>
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
                </tr>
            </thead>
            <tbody class="working-records-container">
                @foreach ($document->working_records as $working_record)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td class="text-center">{{ $working_record->from_date }} - {{ $working_record->to_date }}</td>
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
        <span>{{ $document->reward_and_discipline }}</span>
    </div>
</div>

@if ($document->first_time_join)
<div class="row mb-2">
    <div class="col-auto">
        <strong>{{ $sn++ }}. Ngày gia nhập lần đầu tiên: </strong>
    </div>
    <div class="col">
        <span>{{ $document->first_time_join }}</span>
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