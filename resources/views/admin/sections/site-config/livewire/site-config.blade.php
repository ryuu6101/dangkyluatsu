<div class="row align-items-center justify-content-center" style="min-height: 80vh">
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                <strong class="text-muted text-uppercase mb-1 d-block">Cơ quan</strong>
                <input type="text" class="form-control mb-3" placeholder="Tên cơ quan" title="Tên cơ quan" wire:model.blur="company_name">
                <input type="text" class="form-control mb-3" placeholder="Địa chỉ" title="Địa chỉ" wire:model.blur="address">
                <input type="text" class="form-control mb-3" placeholder="Số điện thoại" title="Số điện thoại" wire:model.blur="phone">
                <input type="text" class="form-control mb-3" placeholder="Số di động" title="Số di động" wire:model.blur="mobile">
                <strong class="text-muted text-uppercase mb-1 d-block">Tài khoản người dùng</strong>
                <input type="text" class="form-control mb-3" placeholder="Mật khẩu mặc định" title="Mật khẩu mặc định" 
                wire:model.blur="default_password">
            </div>
            <div class="card-footer">
                <button type="button" class="btn btn-primary float-right" wire:click.prevent="save">
                    <div class="icon-floppy-disk mr-1"></div>
                    Lưu
                </button>
            </div>
        </div>
    </div>
</div>