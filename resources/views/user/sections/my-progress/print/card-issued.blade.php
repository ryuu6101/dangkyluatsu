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
                    ĐƠN ĐỀ NGHỊ CẤP THẺ LUẬT SƯ
                </strong>
                <span class="text-center">
                    Kính gửi: Liên đoàn Luật sư Việt Nam <br>
                    Đồng kính gửi: Đoàn Luật sư thành phố Đà Nẵng
                </span>
            </div>
        </div>
    </div>

    <div class="row mb-1">
        <div class="col-8">
            <div class="row">
                <div class="col-auto">Tên tôi là:</div>
                <div class="col field text-uppercase">{{ $document->fullname }}</div>
            </div>
        </div>
        <div class="col-4">
            <div class="row">
                <div class="col-auto">Nam/Nữ:</div>
                <div class="col field">{{ $document->gender }}</div>
            </div>
        </div>
    </div>

    <div class="row mb-1">
        <div class="col-8">
            <div class="row">
                <div class="col-auto">Ngày tháng năm sinh:</div>
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
                <div class="col-auto">CCCD số:</div>
                <div class="col field">{{ $document->id_card_number }}</div>
            </div>
        </div>
        <div class="col-4">
            <div class="row">
                <div class="col-auto">cấp ngày</div>
                <div class="col field">{{ $document->id_card_date }}</div>
            </div>
        </div>
        <div class="col-4">
            <div class="row">
                <div class="col-auto">tại</div>
                <div class="col field">{{ $document->id_card_place }}</div>
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
                <div class="col-auto">Ngày vào Đảng Dự bị:</div>
                <div class="col field">{{ $document->vcp_temperary_date }}</div>
            </div>
        </div>
    </div>

    <div class="row mb-1">
        <div class="col-4">
            <div class="row">
                <div class="col-auto">Ngày chính thức:</div>
                <div class="col field">{{ $document->vcp_offical_date }}</div>
            </div>
        </div>
        <div class="col-8">
            <div class="row">
                <div class="col-auto">Nơi sinh hoạt Đảng hiện nay:</div>
                <div class="col field">{{ $document->union_ativity_place }}</div>
            </div>
        </div>
    </div>

    <div class="row mb-1">
        <div class="col-auto">Trình độ chuyên môn:</div>
        <div class="col field">{{ $document->educated_expertise }}</div>
    </div>

    <div class="row mb-1">
        <div class="col-auto">Hộ khẩu thường trú:</div>
        <div class="col field">{{ $document->residence_place }}</div>
    </div>

    <div class="row mb-1">
        <div class="col-auto">Địa chỉ liên lạc:</div>
        <div class="col field">{{ $document->current_place }}</div>
    </div>

    <div class="row mb-1">
        <div class="col-auto">Tên tổ chức hành nghề:</div>
        <div class="col field">{{ $document->organization->name ?? '' }}</div>
    </div>

    <div class="row mb-1">
        <div class="col-auto">Địa chỉ trụ sở chính:</div>
        <div class="col field">{{ $document->organization->address ?? '' }}</div>
    </div>

    <div class="row mb-1">
        <div class="col-8">
            <div class="row">
                <div class="col-auto">Địện thoại trụ sở chính:</div>
                <div class="col field">{{ $document->organization->phone ?? '' }}</div>
            </div>
        </div>
        <div class="col-4">
            <div class="row">
                <div class="col-auto">Fax:</div>
                <div class="col field">{{ $document->organization->fax ?? '' }}</div>
            </div>
        </div>
    </div>

    <div class="row mb-1">
        <div class="col-8">
            <div class="row">
                <div class="col-auto">Địện thoại di động:</div>
                <div class="col field">{{ $document->organization->mobile ?? '' }}</div>
            </div>
        </div>
        <div class="col-4">
            <div class="row">
                <div class="col-auto">Email:</div>
                <div class="col field">{{ $document->organization->email ?? '' }}</div>
            </div>
        </div>
    </div>

    <div class="row mb-1">
        <div class="col-auto">Chứng chỉ hành nghề luật sư số:</div>
        <div class="col field">{{ $document->law_certificate_number }}</div>
        <div class="col-auto">cấp ngày</div>
        <div class="col field">{{ $document->law_certificate_date }}</div>
    </div>

    <div class="row mb-1">
        <div class="col-auto">Gia nhập Đoàn luật sư theo Quyết định kết nạp số</div>
        <div class="col field">{{ $document->admission_number }}</div>
        @php($date = explode('/', $document->admission_date ?? '///'))
        <div class="col-auto">ngày</div>
        <div class="col field">{{ $date[0] }}</div>
        <div class="col-auto">tháng</div>
        <div class="col field">{{ $date[1] }}</div>
        <div class="col-auto">năm</div>
        <div class="col field">{{ $date[2] }}</div>
        <div class="col-12">của Ban chủ nhiệm Đoàn luật sư tỉnh/thành phố Đà Nẵng</div>
    </div>

    <div class="row mb-1">
        <div class="col">
            Phí thành viên của Đoàn luật và Liên đoàn luật sư: đã hoàn thành nghĩa vụ nộp phí 
            luật sư kể từ ngày gia nhập Đoàn luật sư cho đến ngày {{ $document->created_at->format('d/m/Y') }}
        </div>
    </div>

    <div class="row mb-1">
        <div class="col text-indent">
            Đề nghị Liên đoàn Luật sư Việt Nam và Đoàn luật sư tỉnh/thành phố Đà Nẵng cho tôi được cấp lại Thẻ luật sư 
            để hành nghề luật sư theo quy định của pháp luật.
        </div>
    </div>

    <div class="row mb-1">
        <div class="col text-indent">
            Tôi xin chịu trách nhiệm hoàn toàn trước pháp luật về sự trung thực, chính xác của nội dung giấy đề nghị này 
            và hồ sơ kèm theo.
        </div>
    </div>

    <div class="row mb-1">
        <div class="col-6">
            Xác nhận của BCN Đoàn luật sư thành phố Đà Nẵng <br>
            Ông/Bà: <span class="text-uppercase">{{ $document->fullname }}</span> <br>
            Đã được chấp nhận gia nhập Đoàn luật sư tỉnh/thành phố theo quyết định số 
            <div class="field d-inline-block" style="width:5rem"></div>
            <div class="my-3" style="border-bottom: 1px dashed black"></div>
            <div class="text-center">
                <strong>Chủ nhiệm</strong> <br>
                <span class="font-italic">(Ký và ghi rõ họ tên)</span>
            </div>
        </div>
        <div class="col-6 text-center">
            {{ $document->city }}, {{ today()->format('\n\g\à\y d \t\h\á\n\g m \n\ă\m Y') }} <br>
            <strong>Người đề nghị</strong> <br>
            <span class="font-italic">(Ký và ghi rõ họ tên)</span>
        </div>
    </div>
</div>