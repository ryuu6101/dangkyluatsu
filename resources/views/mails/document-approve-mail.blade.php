<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thông báo</title>

    <style>
        .mb-2 {
            margin-bottom: .625rem !important;
        }

        .mb-3 {
            margin-bottom: 1.25rem !important;
        }

        .text-uppercase {
            text-transform: uppercase;
        }

        span {
            color: black !important;
        }
    </style>
</head>
<body>
    <div class="mb-3">
        <div class="mb-2">
            <span>Xin chào "{{ $document->fullname }}",</span>
        </div>
        <div class="mb-2">
            <span class="text-uppercase">
                {{ $site_config->company_name }} TRÂN TRỌNG THÔNG BÁO ANH/CHỊ ĐÃ ĐĂNG KÝ HỒ SƠ 
                {{ $document->document_type_id == 1 ? 'TẬP SỰ' : 'GIA NHẬP ĐOÀN' }} THÀNH CÔNG NHƯ SAU
            </span>
        </div>
        <div class="mb-2">
            <span>A. Thông tin đăng ký:</span>
        </div>
        <div class="mb-2">
            <span>1. Họ và tên: "{{ $document->fullname }}"</span>
        </div>
        <div class="mb-2">
            <span>2. Ngày, tháng, năm sinh: "{{ $document->birthday }}"</span>
        </div>
        <div class="mb-2">
            <span>3. Số CMT/CCCD: "{{ $document->id_card_number }}"</span>
        </div>
    </div>

    <div class="mb-3">
        <div class="mb-2">
            <span>B. Hướng dẫn truy cập Hệ thống và theo dõi tình trạng hồ sơ</span>
        </div>
        <div class="mb-2">
            <span>Truy cập đường link <a href="{{ url('/') }}">{{ preg_replace("(^https?://)", "", url('/')) }}</a> với:</span>
        </div>
        <div class="mb-2">
            <span>
                • Tên đăng nhập: {{ $user->username }}
            </span>
        </div>
        <div class="mb-2">
            <span>
                • Mật khẩu: {{ $site_config->default_password }}
            </span>
            <span class="font-italic"> (Vui lòng đổi mật khẩu sau khi kích hoạt tài khoản). </span>
            <span>Nếu đã có tài khoản từ trước vui lòng dùng mật khẩu trước đó để đăng nhập.</span>
        </div>
    </div>

    <div class="mb-3">
        <div class="mb-2">
            <span>C. Ghi chú</span>
        </div>
        <div class="mb-2">
            <span>
                1. Đoàn luật sư Đà Nẵng đã tiếp nhận và sẽ xử lý Hồ sơ của Anh/Chị trong vòng 1-2 ngày. Nếu Hồ sơ có nội dung 
                cần chỉnh sửa, Đoàn sẽ gửi thông báo tới Anh/Chị qua hệ thống 
                <a href="{{ url('/') }}">{{ preg_replace("(^https?://)", "", url('/')) }}</a>. 
                Vui lòng theo dõi và kiểm tra tình trạng Hồ sơ trên Hệ thống
            </span>
        </div>
        <div class="mb-2">
            <span>
                2. Nếu hồ sơ không có nội dung cần chỉnh sửa, Anh/Chị tiếp tục theo dõi nộp Hồ sơ bản cứng tại {{ $site_config->address }}
            </span>
        </div>
        <div class="mb-2">
            <strong>Anh chị vui lòng nộp bản cứng lên thành đoàn vào: {{ $datetime }}</strong>
        </div>
        <div class="mb-2">
            <span>
                3. Trong trường hợp cần hỗ trợ khi truy cập hoặc sử dụng, vui lòng liên hệ số điện thoại 
                {{ $site_config->phone ?? $site_config->mobile }}
                {{ $site_config->mobile != '' ? ' Trường hợp khẩn cấp '.$site_config->mobile : '' }}
            </span>
        </div>
        <div class="mb-2">
            <span>Chúc Anh/Chị ngày mới tốt lành!</span>
        </div>
        <div class="mb-2">
            <span>Lưu ý: Đây là thư gửi tự động, Anh/Chị vui lòng không trả lời thư này.</span>
        </div>
    </div>
</body>
</html>