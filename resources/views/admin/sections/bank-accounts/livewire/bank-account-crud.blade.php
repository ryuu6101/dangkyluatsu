<div>
    <div wire:ignore.self class="modal fade" id="crudBankAccountModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content" wire:loading wire:target="modalSetup">
                <div class="container-fluid py-5">
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="spinner-border spinner-border-sm mr-2" role="status"></div>
                        <span class="ms-2">Vui lòng đợi</span>
                    </div>
                </div>
            </div>

            <div class="modal-content" wire:loading.remove wire:target="modalSetup">
                <div class="modal-header">
                    <h5 class="modal-title">
                        @if ($action == 'create')
                        Thêm mới tài khoản ngân hàng
                        @elseif ($action == 'update')
                        Chỉnh sửa tài khoản ngân hàng
                        @elseif ($action == 'delete')
                        Xác nhận
                        @endif
                    </h5>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent={{ $action }} id="crudAdminForm">

                        @if ($action == 'delete')
                        <div class="row">
                            <div class="col">
                                <span>Bạn có muốn xóa {{ $bank_account->bank_name }}?</span>
                            </div>
                        </div>
                        @else
                        <div class="row mb-4">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Tên ngân hàng" wire:model.blur="bank_name">
                                @error('bank_name')
                                <span class="text-danger ml-1">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col p-3 text-center">
                                <input type="file" class="d-none" id="qrCode" wire:model="qr_code">
                                <label class="rounded overflow-hidden cursor-pointer d-block" for="qrCode">
                                    @if ($qr_code)
                                    <img src="{{ asset(is_string($qr_code) ? $qr_code : $qr_code->temporaryUrl()) }}" alt="" class="img-fluid">
                                    @else
                                    <div class="text-muted p-3">
                                        <i class="icon-qrcode" style="font-size: 10rem"></i>
                                    </div>
                                    @endif
                                </label>
                                @error('qr_code')
                                <span class="text-danger ml-1">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        @endif

                    </form>
                </div>
                <div class="modal-footer">
                    @if ($action == 'delete')
                    <button type="submit" class="btn btn-danger" form="crudAdminForm" wire:loading.attr="disabled">Đồng ý</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                    @else
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Đóng
                    </button>
                    <button type="submit" class="btn btn-primary" form="crudAdminForm">
                        <i class="icon-floppy-disk mr-2"></i>
                        Lưu
                    </button>
                    @endif
                </div>

            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    $(document).ready(function() {
        $('#crudBankAccountModal').on('show.bs.modal', function(e) {
            var id = e.relatedTarget.getAttribute('data-bank-account-id') ?? 0;
            @this.call('modalSetup', id);
        })

        $(document).on('close-crud-bank-account-modal', function() {
            $('#crudBankAccountModal').modal('hide');
        })
    })
</script>
@endpush