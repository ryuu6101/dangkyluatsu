<div class="modal fade" id="secondaryForm" tabindex="-1" role="dialog" aria-hidden="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body document-form" style="padding: 1.25rem 5rem">
                <input type="hidden" name="secondary_form[document_type_id]" value="3" form="memberRegisterForm">
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
                        <input type="text" class="dotted-line-input text-uppercase" value="{{ $user->fullname }}"
                        name="secondary_form[fullname]" readonly  form="memberRegisterForm">
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
                                <input type="text" class="dotted-line-input" value="{{ $user->gender }}"
                                name="secondary_form[gender]" readonly form="memberRegisterForm">
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
                                <input type="text" class="dotted-line-input" value="{{ $user->birthday }}"
                                name="secondary_form[birthday]" readonly form="memberRegisterForm">
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
                                <input type="text" class="dotted-line-input" value="{{ $user->birthplace }}"
                                name="secondary_form[birthplace]" readonly form="memberRegisterForm">
                                <span class="error-message text-danger"></span>
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
                                <input type="text" class="dotted-line-input" value="{{ $user->id_card_number }}"
                                name="secondary_form[id_card_number]" readonly form="memberRegisterForm">
                                <span class="error-message text-danger"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="col-auto">
                                <strong>{{ $sn++ }}. Ngày cấp: </strong>
                            </div>
                            <div class="col">
                                <input type="text" class="dotted-line-input" value="{{ $user->id_card_date }}"
                                name="secondary_form[id_card_date]" readonly form="memberRegisterForm">
                                <span class="error-message text-danger"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="col-auto">
                                <strong>{{ $sn++ }}. Nơi cấp: </strong>
                            </div>
                            <div class="col">
                                <input type="text" class="dotted-line-input" value="{{ $user->id_card_place }}"
                                name="secondary_form[id_card_place]" readonly form="memberRegisterForm">
                                <span class="error-message text-danger"></span>
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
                                <input type="text" class="dotted-line-input" value="{{ $user->ethnic }}"
                                name="secondary_form[ethnic]" readonly form="memberRegisterForm">
                                <span class="error-message text-danger"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-auto">
                                <strong>{{ $sn++ }}. Tôn giáo: </strong>
                            </div>
                            <div class="col">
                                <input type="text" class="dotted-line-input" value="{{ $user->religious }}"
                                name="secondary_form[religious]" readonly form="memberRegisterForm">
                                <span class="error-message text-danger"></span>
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
                                <input type="text" class="dotted-line-input"
                                name="secondary_form[vcp_temperary_date]" readonly form="memberRegisterForm">
                                <span class="error-message text-danger"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-auto">
                                <strong>{{ $sn++ }}. Ngày chính thức: </strong>
                            </div>
                            <div class="col">
                                <input type="text" class="dotted-line-input" 
                                name="secondary_form[vcp_offical_date]" readonly form="memberRegisterForm">
                                <span class="error-message text-danger"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-auto">
                        <strong>{{ $sn++ }}. Nơi sinh hoạt Đảng hiện nay: </strong>
                    </div>
                    <div class="col">
                        <input type="text" class="dotted-line-input" 
                        name="secondary_form[union_ativity_place]" form="memberRegisterForm">
                        <span class="error-message text-danger"></span>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-auto">
                        <strong>{{ $sn++ }}. Trình độ chuyên môn: </strong>
                    </div>
                    <div class="col">
                        <input type="text" class="dotted-line-input" 
                        name="secondary_form[educated_expertise]" readonly form="memberRegisterForm">
                        <span class="error-message text-danger"></span>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-auto">
                        <strong>{{ $sn++ }}. Hộ khẩu thường trú: </strong>
                    </div>
                    <div class="col">
                        <input type="text" class="dotted-line-input" value="{{ $user->residence_place }}"
                        name="secondary_form[residence_place]" readonly form="memberRegisterForm">
                        <span class="error-message text-danger"></span>
                    </div>
                </div>
    
                <div class="row mb-2">
                    <div class="col-auto">
                        <strong>{{ $sn++ }}. Địa chỉ liên lạc: </strong>
                    </div>
                    <div class="col">
                        <input type="text" class="dotted-line-input" value="{{ $user->current_place }}"
                        name="secondary_form[current_place]" readonly form="memberRegisterForm">
                        <span class="error-message text-danger"></span>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-auto">
                        <strong>{{ $sn++ }}. Tên tổ chức hành nghề: </strong>
                    </div>
                    <div class="col">
                        <select class="dotted-line-input select-box" required
                        name="secondary_form[organization_id]" form="memberRegisterForm">
                            <option value="" hidden>Chọn</option>
                            @foreach ($organizations as $organization)
                            <option value="{{ $organization->id }}" class="text-dark">{{ $organization->name }}</option>
                            @endforeach
                        </select>
                        <span class="text-danger error-message"></span>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-auto">
                        <strong>{{ $sn++ }}. Địa chỉ trụ sở chính: </strong>
                    </div>
                    <div class="col organ-address"></div>
                </div>

                <div class="row mb-2">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-auto">
                                <strong>{{ $sn++ }}. Địện thoại trụ sở chính: </strong>
                            </div>
                            <div class="col organ-phone"></div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-auto">
                                <strong>{{ $sn++ }}. Fax: </strong>
                            </div>
                            <div class="col organ-fax"></div>
                        </div>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-auto">
                                <strong>{{ $sn++ }}. Địện thoại di động: </strong>
                            </div>
                            <div class="col organ-mobile"></div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-auto">
                                <strong>{{ $sn++ }}. Email: </strong>
                            </div>
                            <div class="col organ-email"></div>
                        </div>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-auto">
                        <strong>{{ $sn++ }}. Chứng chỉ hành nghề luật sư số: </strong>
                    </div>
                    <div class="col">
                        <input type="text" class="dotted-line-input" 
                        name="secondary_form[law_certificate_number]" readonly form="memberRegisterForm">
                        <span class="error-message text-danger"></span>
                    </div>
                    <div class="col-auto">
                        <strong> do Bộ trưởng Bộ Tư pháp cấp ngày: </strong>
                    </div>
                    <div class="col">
                        <input type="text" class="dotted-line-input" 
                        name="secondary_form[law_certificate_date]" readonly form="memberRegisterForm">
                        <span class="error-message text-danger"></span>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-auto">
                        <strong>{{ $sn++ }}. Gia nhập Đoàn luật sư theo Quyết định kết nạp số </strong>
                    </div>
                    <div class="col">
                        <input type="text" class="dotted-line-input" 
                        name="secondary_form[admission_number]" form="memberRegisterForm">
                        <span class="error-message text-danger"></span>
                    </div>
                    <div class="col-auto">
                        <strong> ngày </strong>
                    </div>
                    <div class="col">
                        <input type="text" class="dotted-line-input datepicker"
                        name="secondary_form[admission_date]" form="memberRegisterForm">
                        <span class="error-message text-danger"></span>
                        <span class="badge position-absolute calendar-icon">
                            <i class="icon-calendar2"></i>
                        </span>
                    </div>
                    <div class="col-12">
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
                    <div class="col-auto" style="width:8rem">
                        <input type="text" class="dotted-line-input" 
                        name="secondary_form[city]" readonly form="memberRegisterForm">
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

                <div class="row mb-2">
                    <div class="col-auto">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input agreement-checkbox-secondary" id="secondaryCommitmentCheckbox">
                            <span class="custom-control-label p-0"></span>
                        </label>
                    </div>
                    <div class="col">
                        <strong>Tôi cam kết và chịu trách nhiệm nội dung kê khai và các file đính kèm đúng sự thật.</strong>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-center border-top pt-2">
                <button type="button" class="btn btn-outline-warning btn-sm mr-2" data-dismiss="modal">
                    Xem lại
                </button>
                <button type="button" class="btn btn-warning btn-sm submit-btn-secondary" disabled onclick="submit('memberRegisterForm')">
                    Đăng ký
                </button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    let notified = false;
    function openSecondaryForm(formId) {
        if (!validateAll(formId)) return;

        $('#documentFormModal').modal('hide');
        $('#secondaryForm').modal('show');

        if (!notified) {
            notified = true;
            new Noty({
                text: 'Vì bạn là luật sư mới nên cần điền thêm đơn xin cấp mới thẻ luật sư',
                type: 'success',
            }).show();
        }
    }

    $(document).ready(function() {
        $('#secondaryForm').on('hide.bs.modal', function() {
            $('#documentFormModal').modal('show');
        });
    });
</script>
@endpush