<?php

namespace App\Livewire\Admins;

use Livewire\Component;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use App\Livewire\Admins\AdminList;
use App\Repositories\Roles\RoleRepositoryInterface;
use App\Repositories\Admins\AdminRepositoryInterface;

class AdminCrud extends Component
{
    protected $adminRepos;
    protected $roleRepos;

    public $admin;
    public $action;
    public $roles;

    public $username;
    public $password;
    public $role_id;

    public function mount() {
        $this->roles = $this->roleRepos->getAll();
    }

    public function boot(
        RoleRepositoryInterface $roleRepos,
        AdminRepositoryInterface $adminRepos,
    ) {
        $this->roleRepos = $roleRepos;
        $this->adminRepos = $adminRepos;
    }

    public function rules() {
        return [
            'username' => [
                'required',
                Rule::unique('users')->ignore($this->user->id ?? 0),
            ],
            'password' => ['required'],
            'role_id' => ['gt:0'],
        ];
    }

    public function messages() {
        return [
            'username.required' => 'Vui lòng nhập tên tài khoản',
            'username.unique' => 'Tài khoản đã tồn tại',
            'password' => 'Vui lòng nhập mật khẩu',
        ];
    }

    public function modalSetup($id) {
        if ($id > 0) {
            $this->action = 'update';
        } elseif ($id < 0) {
            $this->action = 'delete';
        } else {
            $this->action = 'create';
        }

        $this->admin = $this->adminRepos->find(abs($id));

        $this->resetErrorBag();
        $this->getData();
    }

    public function getData() {
        $this->username = $this->admin->username ?? '';
        $this->password = $this->admin->password ?? '';
        $this->role_id = $this->admin->role_id ?? 1;
    }

    public function create() {
        $this->resetErrorBag();
        $params = $this->validate();
        $params['password'] = bcrypt($this->password);
        $user = $this->adminRepos->create($params);
        $this->postCrud('Đã thêm tài khoản');
    }

    public function update() {
        $this->resetErrorBag();
        $params = $this->validate();
        unset($params['password']);
        $this->user->update($params);
        $this->postCrud('Đã cập nhật tài khoản');
    }

    public function delete() {
        $this->user->delete();
        $this->postCrud('Đã xóa tài khoản');
    }

    public function postCrud($message = '') {
        $this->reset('action', 'user');
        $this->dispatch('refresh')->to(AdminList::class);
        $this->dispatch('close-crud-user-modal');
        $this->dispatch('show-message',
            type: 'success', 
            message: $message,
        );
    }

    public function render()
    {
        return view('admin.sections.admins.livewire.admin-crud');
    }
}
