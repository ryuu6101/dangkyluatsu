<div class="row">
    <div class="col">
        <div class="card" style="background-color: rgba(255,255,255,0.7)">
            <div class="card-body pt-3 pb-3" style="padding:0 10rem">
                <div class="row mb-2 pb-3 border-bottom">
                    <div class="col">
                        <h4 class="font-weight-black mb-0">Tài khoản</h4>
                        <span>Vui lòng nhập tài khoản mới để thay đổi tài khoản.</span>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-form-label col-4 text-right">Tài khoản của bạn</label>
                    <div class="col">
                        <input type="text" class="form-control" wire:model.blur="username">
                        @error("username")
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-2"></div>
                </div>
                <div class="row border-top pt-2">
                    <div class="col text-center">
                        <button type="button" class="btn btn-primary btn-sm" wire:click.prevent="saveUsername">
                            Cập nhật
                        </button>
                    </div>
                </div>

                <div class="row mb-2 pb-3 mt-5 border-bottom">
                    <div class="col">
                        <h4 class="font-weight-black mb-0">Mật khẩu</h4>
                        <span>Vui lòng nhập mật khẩu của bạn để thay đổi mật khẩu.</span>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-form-label col-4 text-right">Mật khẩu hiện tại</label>
                    <div class="col">
                        <input type="password" class="form-control" wire:model.blur="current_password">
                        @error("current_password")
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-2"></div>
                </div>
                <div class="row form-group">
                    <label class="col-form-label col-4 text-right">Mật khẩu mới</label>
                    <div class="col">
                        <input type="password" class="form-control" wire:model.blur="new_password">
                    </div>
                    <div class="col-2"></div>
                </div>
                <div class="row form-group">
                    <label class="col-form-label col-4 text-right">Nhập lại mật khẩu</label>
                    <div class="col">
                        <input type="password" class="form-control" wire:model.blur="new_password_confirmation">
                        @error("new_password")
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-2"></div>
                </div>
                <div class="row border-top pt-2">
                    <div class="col text-center">
                        <button type="button" class="btn btn-primary btn-sm" wire:click.prevent="savePassword">
                            Cập nhật
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>