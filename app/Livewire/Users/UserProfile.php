<?php

namespace App\Livewire\Users;

use Livewire\Component;
use Livewire\WithFileUploads;

class UserProfile extends Component
{
    use WithFileUploads;

    public $user;
    public $params;
    public $profile_pic;

    public function mount() {
        $this->user = auth()->guard('web')->user();
        $this->params = $this->user->toArray();
    }

    public function save() {
        $this->user->update($this->params);
        $this->dispatch('show-message', type: 'success', message: 'Đã lưu thông tin cá nhân');
    }

    public function updatedProfilePic() {
        $path = $this->profile_pic->store('public/upload');
        $this->user->update(['profile_pic' => 'storage/'.substr($path, strlen('public/'))]);
        $this->dispatch('show-message', type: 'success', message: 'Đã cập nhật ảnh hồ sơ');
    }

    public function render()
    {
        // dd($this->params);
        return view('user.sections.my-profile.livewire.user-profile');
    }
}
