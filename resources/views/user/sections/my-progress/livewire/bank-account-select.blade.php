<div>
    <div wire:ignore.self class="modal fade" id="selectBankAccountModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" wire:loading.remove wire:target="modalSetup">
                <div class="modal-header">
                    <h5 class="modal-title">
                        Thanh toán hóa đơn
                    </h5>
                </div>
                <div class="modal-body">
                    @if ($progress_type_id == 1)
                    <div class="row mb-2">
                        <div class="col-4">
                            <span>Số tiền thanh toán:</span>
                        </div>
                        <div class="col">
                            <strong>2.000 VNĐ</strong>
                        </div>
                    </div>
                    @elseif ($progress_type_id == 2)
                    <div class="row mb-2">
                        <div class="col-4">
                            <strong>Phí gia nhập đoàn:</strong>
                        </div>
                        <div class="col">
                            <span>1.000 VNĐ</span>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-4">
                            <strong>Phí xây dựng đoàn:</strong>
                        </div>
                        <div class="col">
                            <span>1.000 VNĐ</span>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-4">
                            <strong>Phí làm thẻ:</strong>
                        </div>
                        <div class="col">
                            <span>1.000 VNĐ</span>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-4">
                            <span>Số tiền thanh toán:</span>
                        </div>
                        <div class="col">
                            <strong>3.000 VNĐ</strong>
                        </div>
                    </div>
                    @endif
                    <div class="row form-group mb-2 pt-2 border-top">
                        <label class="col-form-label col-4">
                            Chọn ngân hàng:
                        </label>
                        <div class="col">
                            @if ($bank_accounts->count())
                            <select class="custom-select" wire:model.live="bank_account_id">
                                <option value="" hidden>Chọn ngân hàng</option>
                                @foreach ($bank_accounts as $value)
                                <option value="{{ $value->id }}">{{ $value->bank_name }}</option>
                                @endforeach
                            </select>
                            @else
                            <select class="custom-select" disabled>
                                <option value="">Chọn ngân hàng</option>
                            </select>
                            @endif
                        </div>
                    </div>
                    @if ($bank_account)
                    <div class="row mb-2">
                        <div class="col text-center">
                            <img src="{{ asset($bank_account->qr_code) }}" alt="" class="img-fluid rounded" style="width:15rem">
                        </div>
                    </div>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Hủy
                    </button>
                </div>

            </div>
        </div>
    </div>
</div>