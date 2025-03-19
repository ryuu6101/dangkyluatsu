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
                    GIẤY ĐỀ NGHỊ CẤP THẺ LUẬT SƯ
                </strong> <br>
            </h3>
            <span class="mt-5">
                <strong class="">Kính gửi: Liên đoàn Luật sư Việt Nam</strong> <br>
                <strong class="">Đồng kính gửi: Đoàn Luật sư thành phố Đà Nẵng</strong>
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
                <strong>{{ $sn++ }}. Nơi sinh: </strong>
            </div>
            <div class="col">
                <span>{{ $document->birthplace }}</span>
            </div>
        </div>
    </div>
</div>


<div class="row mb-2">
    <div class="col-4">
        <div class="row">
            <div class="col-auto">
                <strong>{{ $sn++ }}. CCCD: </strong>
            </div>
            <div class="col">
                <span>{{ $document->id_card_number }}</span>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="row">
            <div class="col-auto">
                <strong>{{ $sn++ }}. Ngày cấp: </strong>
            </div>
            <div class="col">
                <span>{{ $document->id_card_date }}</span>
            </div>
        </div>
    </div>
    <div class="col-4">
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
    <div class="col-6">
        <div class="row">
            <div class="col-auto">
                <strong>{{ $sn++ }}. Dân tộc: </strong>
            </div>
            <div class="col">
                <span>{{ $document->ethnic }}</span>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="row">
            <div class="col-auto">
                <strong>{{ $sn++ }}. Tôn giáo: </strong>
            </div>
            <div class="col">
                <span>{{ $document->religious }}</span>
            </div>
        </div>
    </div>
</div>

<div class="row mb-2">
    <div class="col-6">
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
        <strong>{{ $sn++ }}. Nơi sinh hoạt Đảng hiện nay: </strong>
    </div>
    <div class="col">
        <span>{{ $document->union_ativity_place }}</span>
    </div>
</div>

<div class="row mb-2">
    <div class="col-auto">
        <strong>{{ $sn++ }}. Trình độ chuyên môn: </strong>
    </div>
    <div class="col">
        <span>{{ $document->educated_expertise }}</span>
    </div>
</div>

<div class="row mb-2">
    <div class="col-auto">
        <strong>{{ $sn++ }}. Hộ khẩu thường trú: </strong>
    </div>
    <div class="col">
        <span>{{ $document->residence_place }}</span>
    </div>
</div>

<div class="row mb-2">
    <div class="col-auto">
        <strong>{{ $sn++ }}. Địa chỉ liên lạc: </strong>
    </div>
    <div class="col">
        <span>{{ $document->current_place }}</span>
    </div>
</div>

<div class="row mb-2">
    <div class="col-auto">
        <strong>{{ $sn++ }}. Tên tổ chức hành nghề: </strong>
    </div>
    <div class="col">
        <span>{{ $document->organization->name ?? '' }}</span>
    </div>
</div>

<div class="row mb-2">
    <div class="col-auto">
        <strong>{{ $sn++ }}. Địa chỉ trụ sở chính: </strong>
    </div>
    <div class="col">
        <span>{{ $document->organization->address ?? '' }}</span>
    </div>
</div>

<div class="row mb-2">
    <div class="col-6">
        <div class="row">
            <div class="col-auto">
                <strong>{{ $sn++ }}. Địện thoại trụ sở chính: </strong>
            </div>
            <div class="col">
                <span>{{ $document->organization->phone ?? '' }}</span>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="row">
            <div class="col-auto">
                <strong>{{ $sn++ }}. Fax: </strong>
            </div>
            <div class="col">
                <span>{{ $document->organization->fax ?? '' }}</span>
            </div>
        </div>
    </div>
</div>

<div class="row mb-2">
    <div class="col-6">
        <div class="row">
            <div class="col-auto">
                <strong>{{ $sn++ }}. Địện thoại di động: </strong>
            </div>
            <div class="col">
                <span>{{ $document->organization->mobile ?? '' }}</span>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="row">
            <div class="col-auto">
                <strong>{{ $sn++ }}. Email: </strong>
            </div>
            <div class="col">
                <span>{{ $document->organization->email ?? '' }}</span>
            </div>
        </div>
    </div>
</div>

<div class="row mb-2">
    <div class="col">
        <strong>{{ $sn++ }}. Chứng chỉ hành nghề luật sư số: </strong>
        <span class="px-2">{{ $document->law_certificate_number }}</span>
        <strong> do Bộ trưởng Bộ Tư pháp cấp ngày: </strong>
        <span class="px-2">{{ $document->law_certificate_date }}</span>
    </div>
</div>

<div class="row mb-2">
    <div class="col">
        <strong>{{ $sn++ }}. Gia nhập Đoàn luật sư theo Quyết định kết nạp số </strong>
        <span class="px-2">{{ $document->admission_number }}</span>
        <strong> ngày </strong>
        <span class="px-2">{{ $document->admission_date }}</span>
        <strong> của Ban chủ nhiệm Đoàn luật sư tỉnh/thành phố Đà Nẵng</strong>
    </div>
</div>

<div class="row mb-2">
    <div class="col">
        <strong>
            Đề nghị Liên đoàn Luật sư Việt Nam và Đoàn luật sư tỉnh/thành phố Đà Nẵng cho tôi được cấp lại Thẻ luật sư 
            để hành nghề luật sư theo quy định của pháp luật.
        </strong>
    </div>
</div>

<div class="row mb-2">
    <div class="col">
        <strong>
            Tôi xin chịu trách nhiệm hoàn toàn trước pháp luật về sự trung thực, chính xác của nội dung giấy đề nghị này và 
            hồ sơ kèm theo.
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