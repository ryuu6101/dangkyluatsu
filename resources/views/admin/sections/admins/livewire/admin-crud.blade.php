<div>
    <div wire:ignore.self class="modal fade" id="crudAdminModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
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
                        Thêm mới tài khoản
                        @elseif ($action == 'update')
                        Chỉnh sửa tài khoản
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
                                <span>Bạn có muốn xóa {{ $user->name }}?</span>
                            </div>
                        </div>
                        @else
                        <div class="row">

                            <div class="col-12 mb-2">
                                <input type="text" class="form-control" placeholder="Tên tài khoản" wire:model.blur="username">
                                @error('username')
                                <span class="text-danger ml-1">{{$message}}</span>
                                @enderror
                            </div>

                            @if ($action == 'create')
                            <div class="col-12 mb-2">
                                <input type="password" class="form-control" placeholder="Mật khẩu" wire:model.blur="password">
                                @error('password')
                                <span class="text-danger ml-1">{{$message}}</span>
                                @enderror
                            </div>
                            @endif

                            <div class="col-12 mb-2">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Chức vụ</span>
                                    </div>
                                    <select class="form-control" wire:model.blur="role_id">
                                        @foreach ($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('role_id')
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
        $('#crudAdminModal').on('show.bs.modal', function(e) {
            var id = e.relatedTarget.getAttribute('data-admin-id') ?? 0;
            @this.call('modalSetup', id);
        })

        $(document).on('close-crud-admin-modal', function() {
            $('#crudAdminModal').modal('hide');
        })
    })
</script>
@endpush