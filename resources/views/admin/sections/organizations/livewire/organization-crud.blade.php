<div>
    <div wire:ignore.self class="modal fade" id="crudOrganizationModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-{{ $action == 'delete' ? 'sm' : 'lg' }}">
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
                        Thêm mới tổ chức hành nghề
                        @elseif ($action == 'update')
                        Chỉnh sửa tổ chức hành nghề
                        @elseif ($action == 'delete')
                        Xác nhận
                        @endif
                    </h5>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent={{ $action }} id="crudOrganizationForm">

                        @if ($action == 'delete')
                        <div class="row">
                            <div class="col">
                                <span>Bạn có muốn xóa {{ $organization->name }}?</span>
                            </div>
                        </div>
                        @else
                        <div class="row">

                            <div class="col-12 mb-2">
                                <label>Tên tổ chức</label>
                                <input type="text" class="form-control" wire:model.blur="name">
                                @error('name')
                                <span class="text-danger ml-1">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col-12 mb-2">
                                <label>Địa chỉ</label>
                                <input type="text" class="form-control" wire:model.blur="address">
                                @error('address')
                                <span class="text-danger ml-1">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col-6 mb-2">
                                <label>Số điện thoại</label>
                                <input type="text" class="form-control" wire:model.blur="phone">
                                @error('phone')
                                <span class="text-danger ml-1">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col-6 mb-2">
                                <label>Số di động</label>
                                <input type="text" class="form-control" wire:model.blur="mobile">
                                @error('mobile')
                                <span class="text-danger ml-1">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col-6 mb-2">
                                <label>Fax</label>
                                <input type="text" class="form-control" wire:model.blur="fax">
                                @error('fax')
                                <span class="text-danger ml-1">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col-6 mb-2">
                                <label>Email</label>
                                <input type="text" class="form-control" wire:model.blur="email">
                                @error('email')
                                <span class="text-danger ml-1">{{$message}}</span>
                                @enderror
                            </div>

                        </div>
                        @endif

                    </form>
                </div>
                <div class="modal-footer" wire:loading.remove wire:target="modalSetup">
                    @if ($action == 'delete')
                    <button type="submit" class="btn btn-danger" form="crudOrganizationForm">Đồng ý</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                    @else
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary" form="crudOrganizationForm">
                        <span><i class="icon-floppy-disk mr-2"></i></span>
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
        $('#crudOrganizationModal').on('show.bs.modal', function(e) {
            var id = e.relatedTarget.getAttribute('data-organization-id') ?? 0;
            @this.call('modalSetup', id);
        })

        $(document).on('close-crud-organization-modal', function() {
            $('#crudOrganizationModal').modal('hide');
        })
    })
</script>
@endpush
