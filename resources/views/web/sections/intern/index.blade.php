@extends('web.layouts.master')

@section('title', 'Đăng ký thực tập')

@push('styles')
<style>
    .dotted-line-input {
        width: 100%;
        background: transparent;
        border: none;
        border-bottom: thin black dotted;
        outline: none;
    }

    .select-box {
        height: 26px;
    }

    table th {
        font-weight: 700 !important;
    }
</style>
@endpush    

@section('contents')

<div class="container">
    <div class="card shadow mt-5">
        <div class="card-body py-3" style="padding: 0 6rem">
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
                    <div class="border border-dark" style="aspect-ratio: 3/4; width:8rem">

                    </div>
                </div>
                <div class="col-8">
                    <div class="text-center h-100">
                        <h3>
                            <strong class="text-uppercase">
                                GIẤY ĐỀ NGHỊ <br> ĐĂNG KÝ TẬP SỰ HÀNH NGHỀ LUẬT SƯ
                            </strong> <br>
                        </h3>
                        <span class="align-bottom">
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

            <div class="row mb-2">
                <div class="col-auto">
                    <strong>1. Tên tôi là (ghi bằng chữ in hoa): </strong>
                </div>
                <div class="col">
                    <input type="text" class="dotted-line-input">
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-4">
                    <div class="row">
                        <div class="col-auto">
                            <strong>2. Giới tính: </strong>
                        </div>
                        <div class="col">
                            <select class="select-box">
                                <option value="">Chọn</option>
                                <option value="0">Nam</option>
                                <option value="1">Nữ</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="row">
                        <div class="col-auto">
                            <strong>3. Ngày sinh: </strong>
                        </div>
                        <div class="col">
                            <input type="date">
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="row">
                        <div class="col-auto">
                            <strong>4. Quốc tịch: </strong>
                        </div>
                        <div class="col">
                            <span>Việt Nam</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-4">
                    <div class="row">
                        <div class="col-auto">
                            <strong>5. Dân tộc: </strong>
                        </div>
                        <div class="col">
                            <input type="text" class="dotted-line-input">
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="row">
                        <div class="col-auto">
                            <strong>6. Tôn giáo: </strong>
                        </div>
                        <div class="col">
                            <input type="text" class="dotted-line-input">
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="row">
                        <div class="col-auto">
                            <strong>7. Nơi sinh: </strong>
                        </div>
                        <div class="col">
                            <select class="select-box">
                                <option value="">Chọn</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-auto">
                    <strong>8. Nơi thường trú: </strong>
                </div>
                <div class="col">
                    <input type="text" class="dotted-line-input">
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-auto">
                    <strong>9. Chỗ ở hiện nay: </strong>
                </div>
                <div class="col">
                    <input type="text" class="dotted-line-input">
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-6">
                    <div class="row">
                        <div class="col-auto">
                            <strong>10. Điện thoại: </strong>
                        </div>
                        <div class="col">
                            <input type="text" class="dotted-line-input">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-auto">
                            <strong>11. Email: </strong>
                        </div>
                        <div class="col">
                            <input type="text" class="dotted-line-input">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-auto">
                    <strong>12. Nghề nghiệp hiện tại: </strong>
                </div>
                <div class="col">
                    <input type="text" class="dotted-line-input">
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-auto">
                    <strong>13. Nơi làm việc: </strong>
                </div>
                <div class="col">
                    <input type="text" class="dotted-line-input">
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-auto">
                    <strong>14. CCCD: </strong>
                </div>
                <div class="col">
                    <input type="text" class="dotted-line-input">
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-6">
                    <div class="row">
                        <div class="col-auto">
                            <strong>15. Ngày cấp: </strong>
                        </div>
                        <div class="col">
                            <input type="date">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-auto">
                            <strong>16. Nơi cấp: </strong>
                        </div>
                        <div class="col">
                            <select class="select-box">
                                <option value="">Chọn tỉnh/ thành phố</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-12">
                    <strong>17. HOÀN CẢNH GIA ĐÌNH</strong> <br>
                    <strong class="text-muted">
                        (Ghi rõ họ tên, năm sinh, nghề nghiệp, nơi công tác của bố mẹ đẻ, anh chị em ruột, vợ chồng, con)
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
                        <tbody>
                            <tr>
                                <td colspan="7">
                                    <button type="button" class="btn btn-outline-primary btn-sm btn-block">
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
                    <strong>18. QUÁ TRÌNH HOẠT ĐỘNG CỦA BẢN THÂN</strong> <br>
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
                        <tbody>
                            <tr>
                                <td colspan="7">
                                    <button type="button" class="btn btn-outline-primary btn-sm btn-block">
                                        + Thêm dòng
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <h5><strong class="text-warning">II. Thông tin hồ sơ tập sự</strong></h5>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-auto">
                    <strong>1. Số bằng cử nhân Luật: </strong>
                </div>
                <div class="col">
                    <input type="text" class="dotted-line-input">
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-6">
                    <div class="row">
                        <div class="col-auto">
                            <strong>2. Ngày cấp: </strong>
                        </div>
                        <div class="col">
                            <input type="date">
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-auto">
                            <strong>3. Nơi cấp: </strong>
                        </div>
                        <div class="col">
                            <input type="text" class="dotted-line-input">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-auto">
                    <strong>4. Số giấy chứng nhận tốt nghiệp: </strong>
                </div>
                <div class="col">
                    <input type="text" class="dotted-line-input">
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-6">
                    <div class="row">
                        <div class="col-auto">
                            <strong>5. Ngày cấp: </strong>
                        </div>
                        <div class="col">
                            <input type="date">
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-auto">
                            <strong>6. Nơi cấp: </strong>
                        </div>
                        <div class="col">
                            <input type="text" class="dotted-line-input">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-auto">
                    <strong>7. Thời gian tham dự khóa đào tạo nghề luật sư: </strong>
                </div>
                <div class="col">
                    <input type="text" class="dotted-line-input">
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-auto">
                    <strong>8. Số thẻ luật sư hướng dẫn: </strong>
                </div>
                <div class="col">
                    <input type="text" class="dotted-line-input">
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-12">
                    <strong>9. Khen thưởng - Kỷ luật: </strong> <br>
                    <strong class="text-muted">(Ghi rõ hình thức khen thưởng kỷ luật)</strong>
                </div>
                <div class="col">
                    <input type="text" class="dotted-line-input">
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-12">
                    <strong>10. Bị truy cứu trách nhiệm hình sự: </strong> <br>
                    <strong class="text-muted">
                        (Ghi rõ có hay không việc bị truy cứu trách nhiệm hình sự; nếu đã bị truy cứu trách nhiệm hình sự thì ghi rõ tội danh, 
                        số bản án, cơ quan ra bản án và gửi kèm bản án, văn bản xác nhận xóa án tích của cơ quan có thẩm quyền)
                    </strong>
                </div>
                <div class="col">
                    <input type="text" class="dotted-line-input">
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

            <div class="row flex-column align-items-end mb-2">
                <div class="col-auto text-right">
                    <input type="text" class="dotted-line-input" style="width:5rem">
                    <strong>, {{ today()->format('\n\g\à\y d \t\h\á\n\g m \n\ă\m Y') }}</strong>
                </div>
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
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-left">
                                    Giấy xác nhận của tổ chức hành nghề luật sư về việc nhận tập sự
                                </td>
                                <td class="text-center">
                                    <span class="text-primary">0 file</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td class="text-left">
                                    Bản sao giấy chứng nhận tốt nghiệp đào tạo nghề Luật sư
                                </td>
                                <td class="text-center">
                                    <span class="text-primary">0 file</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td class="text-left">
                                    Giấy tờ chứng minh thuộc trường hợp được giảm thời gian tập sự hành nghề luật sư (không bắt buộc)
                                </td>
                                <td class="text-center">
                                    <span class="text-primary">0 file</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">4</td>
                                <td class="text-left">
                                    Sơ yếu lí lịch có xác nhận của địa phương (không bắt buộc)
                                </td>
                                <td class="text-center">
                                    <span class="text-primary">0 file</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">5</td>
                                <td class="text-left">
                                    Quyết định thôi cán bộ công chức (không bắt buộc)
                                </td>
                                <td class="text-center">
                                    <span class="text-primary">0 file</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">6</td>
                                <td class="text-left">
                                    Bằng cử nhân luật hoặc Bằng thạc sỹ luật (Bản sao)
                                </td>
                                <td class="text-center">
                                    <span class="text-primary">0 file</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col">
                    <input type="checkbox">
                    <label>
                        <strong>Tôi cam kết và chịu trách nhiệm nội dung kê khai và các file đính kèm đúng sự thật.</strong>
                    </label>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col">
                    <input type="checkbox">
                    <label class="underline text-primary">
                        <strong>Cam kết tuân thủ Điều khoản và Điều Kiện Sử Dụng</strong>
                    </label>
                </div>
            </div>
        </div>
        <div class="card-footer text-center">
            <button type="button" class="btn btn-warning btn-sm" disabled>
                Đăng ký
            </button>
        </div>
    </div>
</div>

@endsection