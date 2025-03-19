<?php

namespace App\Livewire\Admins;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\Admins\AdminRepositoryInterface;

class AdminList extends Component
{
    use WithPagination;

    protected $adminRepos;

    public $paginate = 10;
    public $params = [];

    protected $listeners = ['refresh' => '$refresh'];

    public function boot(AdminRepositoryInterface $adminRepos) {
        $this->adminRepos = $adminRepos;
    }

    public function toggleAdmin($id) {
        $admin = $this->adminRepos->find($id);
        $status = $admin->is_actived;

        $admin->update(['is_actived' => !$status]);

        $this->dispatch('show-message', 
            type: 'success',
            message: $status ? 'Đã khóa tài khoản' : 'Đã kích hoạt tài khoản',
        );
    }

    public function render()
    {
        $admins = $this->adminRepos->filter($this->params, $this->paginate);
        return view('admin.sections.admins.livewire.admin-list')->with([
            'admins' => $admins,
        ]);
    }
}
