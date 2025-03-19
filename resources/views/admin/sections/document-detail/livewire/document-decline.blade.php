<div wire:ignore.self id="documentDeclineModal" class="modal fade" data-keyboard="false" data-backdrop="static" 
tabindex="-1" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header border-bottom">
                <div class="modal-title">
                    <h3>Soạn email từ chối</h3>
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
                                {{ $site_config->company_name }} TRÂN TRỌNG THÔNG BÁO VỀ VIỆC TỪ CHỐI HỒ SƠ
                                {{ $document->document_type_id == 1 ? 'TẬP SỰ' : 'ĐĂNG KÝ GIA NHẬP ĐOÀN LUẬT SƯ' }}
                            </span>
                        </div>
                        <div class="mb-2">
                            <span>Với lý do:</span>
                            <textarea class="form-control" wire:model.blur="note" style="min-height: 7rem"></textarea>
                            @error('note')
                            <strong class="text-danger">
                                <i class="icon-exclamation mr-1"></i>
                                {{ $message }}
                            </strong>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <span>Anh/Chị có thể nộp lại hồ sơ đăng ký <u class="text-primary">TẠI ĐÂY</u></span>
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
    $(document).on('close-document-decline-modal', function() {
        $('#documentDeclineModal').modal('hide');
    });
</script>
@endpush