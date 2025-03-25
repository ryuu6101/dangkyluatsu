<div class="row">
    <div class="col">
        <div class="card" style="background-color: rgba(255,255,255,0.7)">
            <div class="card-body pt-3 pb-3" style="padding:0 8rem">
                <div class="row">
                    <div class="col-auto mr-3 text-center">
                        <input type="file" class="d-none" wire:model="profile_pic" id="profilePicInput">
                        <img src="{{ asset($user->profile_pic) }}" class="img-fluid d-block shadow border rounded-circle mb-2" 
                        style="width:10rem; aspect-ratio: 1/1">
                        <label for="profilePicInput" class="text-primary cursor-pointer">
                            <strong>Đổi ảnh hồ sơ</strong>
                        </label>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <label>Họ và tên</label>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <input type="text" class="form-control text-uppercase" wire:model.blur="params.fullname">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1"></div>
                            <div class="col">
                                <label>Giới tính</label>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group pt-1">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="custom-control-input" id="gender_0" 
                                                wire:model="params.gender" value="Nam">
                                                <label class="custom-control-label" for="gender_0">Nam</label>
                                            </div>
        
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="custom-control-input" id="gender_1" 
                                                wire:model="params.gender" value="Nữ">
                                                <label class="custom-control-label" for="gender_1">Nữ</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label>Ngày sinh</label>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <input type="text" class="form-control datepicker" wire:model.blur="params.birthday" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1"></div>
                            <div class="col">
                                <label>Số điện thoại</label>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <input type="text" class="form-control" wire:model.blur="params.phone_number">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label>Email</label>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <input type="text" class="form-control" wire:model.blur="params.email" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1"></div>
                            <div class="col">
                                <label>Địa chỉ</label>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <input type="text" class="form-control" wire:model.blur="params.current_place">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label>Tài khoản</label>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <input type="text" class="form-control" wire:model.blur="params.username" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1"></div>
                            <div class="col"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-right">
                <button type="button" class="btn btn-primary" wire:click.prevent="save">Cập nhật</button>
            </div>
        </div>
    </div>
</div>