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
                {{ $site_config->company_name }} TRÂN TRỌNG THÔNG BÁO VỀ VIỆC TỪ CHỐI HỒ SƠ
                {{ $document->document_type_id == 1 ? 'TẬP SỰ' : 'ĐĂNG KÝ GIA NHẬP ĐOÀN LUẬT SƯ' }}
            </span>
        </div>
        <div class="mb-2">
            <span>Với lý do: {{ $note }}</span>
        </div>
        <div class="mb-2">
            <span>Anh/Chị có thể nộp lại hồ sơ đăng ký <a href="{{ url('/') }}">TẠI ĐÂY</a></span>
        </div>
        <div class="mb-2">
            <span>Lưu ý: Đây là thư gửi tự động, Anh/Chị vui lòng không trả lời thư này.</span>
        </div>
    </div>
</body>
</html>