<?php

namespace App\Livewire\Users;

use Livewire\Component;

class UpdateCredentials extends Component
{
    public $user;
    public $username;
    public $current_password;
    public $new_password;
    public $new_password_confirmation;

    public function rules() {
        return [
            'current_password' => 'required|current_password',
            'new_password' => 'required|confirmed',
        ];
    }

    public function messages() {
        return [
            'current_password.required' => 'Chưa nhập mật khẩu',
            'current_password.current_password' => 'Mật khẩu không chính xác',
            'new_password.required' => 'Chưa nhập mật khẩu mới',
            'new_password.confirmed' => 'Mật khẩu không trùng khớp',
        ];
    }

    public function mount() {
        $this->user = auth()->guard('web')->user();
        $this->username = $this->user->username;
    }

    public function saveUsername() {
        if ($this->username == '') {
            $this->addError('username', 'Chưa nhập tài khoản');
            return;
        }
        $this->user->update(['username' => $this->username]);
        $this->dispatch('show-message', type: 'success', message: 'Đã cập nhật tài khoản');
    }

    public function savePassword() {
        $this->validate();
        $this->user->update(['password' => bcrypt($this->new_password)]);
        $this->dispatch('show-message', type: 'success', message: 'Đổi mật khẩu thành công');
        $this->reset(['current_password', 'new_password', 'new_password_confirmation']);
    }

    public function render()
    {
        return view('user.sections.update-credentials.livewire.update-credentials');
    }
}
