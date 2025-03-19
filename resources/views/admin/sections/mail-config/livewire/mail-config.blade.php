<div class="row align-items-center justify-content-center" style="min-height: 80vh">
    <div class="col-6">
        <div class="card">
            <div class="card-body mt-3">
                {{-- <input type="text" class="form-control mb-3" placeholder="Địa chỉ gửi mail" title="Địa chỉ gửi mail" 
                wire:model.blur="from_address">
                <input type="text" class="form-control mb-3" placeholder="Tên người gửi" title="Tên người gửi" 
                wire:model.blur="from_name"> --}}
                <input type="text" class="form-control mb-3" placeholder="Địa chỉ email" title="Địa chỉ email" wire:model.blur="username">
                <input type="text" class="form-control mb-3" placeholder="Mật khẩu ứng dụng" title="Mật khẩu ứng dụng" wire:model.blur="password">
            </div>
            <div class="card-footer py-1">
                <button type="button" class="btn btn-primary float-right" wire:click.prevent="save">
                    <div class="icon-floppy-disk mr-1"></div>
                    Lưu
                </button>
            </div>
        </div>
    </div>
</div>