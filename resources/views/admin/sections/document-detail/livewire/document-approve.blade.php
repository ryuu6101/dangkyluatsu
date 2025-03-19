<div wire:ignore.self id="documentApproveModal" class="modal fade" data-keyboard="false" data-backdrop="static" 
tabindex="-1" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header border-bottom">
                <div class="modal-title">
                    <h3>Soạn email chấp thuận</h3>
                </div>
            </div>

            <div class="modal-body px-4" style="max-height:70vh; overflow-y: scroll">
                <div class="row mb-3">
                    <div class="col">
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
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <div class="mb-2">
                            <span>B. Hướng dẫn truy cập Hệ thống và theo dõi tình trạng hồ sơ</span>
                        </div>
                        <div class="mb-2">
                            <span>
                                Truy cập đường link 
                                <u class="text-primary">{{ preg_replace("(^https?://)", "", url('/')) }}</u> 
                                với:
                            </span>
                        </div>
                        <div class="mb-2">
                            <span>
                                <i class="icon-primitive-dot mr-2"></i>
                                Tên đăng nhập: 
                            </span>
                            @if ($document->user)
                            <span>{{ $document->user->username }}</span>
                            @else
                            <div class="d-inline-block">
                                <input type="text" class="form-control form-control-sm @error('credentials.username') is-invalid @enderror" 
                                wire:model.blur="credentials.username">
                            </div>
                            @error('credentials.username')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                            @endif
                        </div>
                        <div class="mb-2">
                            <span>
                                <i class="icon-primitive-dot mr-2"></i>
                                Mật khẩu: 
                            </span>
                            @if ($document->user)
                            <span>{{ $site_config->default_password }}</span>
                            @else
                            <div class="d-inline-block">
                                <input type="text" class="form-control form-control-sm @error('credentials.password') is-invalid @enderror" 
                                wire:model.blur="credentials.password">
                            </div>
                            @error('credentials.password')
                            <strong class="text-danger">{{ $message }}</strong> <br>
                            @enderror
                            @endif
                            <span class="font-italic"> (Vui lòng đổi mật khẩu sau khi kích hoạt tài khoản). </span>
                            <span>Nếu đã có tài khoản từ trước vui lòng dùng mật khẩu trước đó để đăng nhập.</span>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <div class="mb-2">
                            <span>C. Ghi chú</span>
                        </div>
                        <div class="mb-2">
                            <span>
                                1. Đoàn luật sư Đà Nẵng đã tiếp nhận và sẽ xử lý Hồ sơ của Anh/Chị trong vòng 1-2 ngày. Nếu Hồ sơ có nội dung 
                                cần chỉnh sửa, Đoàn sẽ gửi thông báo tới Anh/Chị qua hệ thống 
                                <u class="text-primary">{{ preg_replace("(^https?://)", "", url('/')) }}</u>. 
                                Vui lòng theo dõi và kiểm tra tình trạng Hồ sơ trên Hệ thống
                            </span>
                        </div>
                        <div class="mb-2">
                            <span>
                                2. Nếu hồ sơ không có nội dung cần chỉnh sửa, Anh/Chị tiếp tục theo dõi nộp Hồ sơ bản cứng tại 
                                {{ $site_config->address }}
                            </span>
                        </div>
                        <div class="mb-2">
                            <strong>Anh chị vui lòng nộp bản cứng lên thành đoàn vào: </strong>
                            <div class="d-inline-block">
                                <input type="text" class="form-control form-control-sm datetime-picker @error('datetime') is-invalid @enderror" 
                                wire:model="datetime" readonly>
                            </div>
                            @error('datetime')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
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
                </div>
            </div>

            <div class="modal-footer border-top pt-2">
                <button type="button" class="btn btn-link" data-dismiss="modal" wire:loading.attr="disabled" wire:target="submit">
                    Hủy
                </button>
                <button type="button" class="btn btn-success" wire:click.prevent="submit" wire:loading.attr="disabled" wire:target="submit">
                    <i class="spinner icon-spinner2 mr-2" wire:loading wire:target="submit"></i>
                    Gửi
                </button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    $(document).ready(function() {
        $('body').on('focus', '#documentApproveModal .datetime-picker:not(.has-datepicker)', function() {
            this.classList.add("has-datepicker");
            $(this).daterangepicker({
                parentEl: '#documentApproveModal .modal-body',
                singleDatePicker: true,
                timePicker: true,
                timePicker24Hour: true,
                autoUpdateInput: false,
                drops: 'up',
                locale: {
                    format: 'DD-MM-YYYY H:mm:ss'
                }
            }).on('apply.daterangepicker', function(ev, picker) {
                let datetime = picker.startDate.format('DD-MM-YYYY H:mm:ss');
                @this.set('datetime', datetime);
            });
        });
    });

    $(document).on('close-document-approve-modal', function() {
        $('#documentApproveModal').modal('hide');
    });
</script>
@endpush