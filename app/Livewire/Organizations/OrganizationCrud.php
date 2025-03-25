<?php

namespace App\Livewire\Organizations;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Livewire\Organizations\OrganizationList;
use App\Repositories\Organizations\OrganizationRepositoryInterface;

class OrganizationCrud extends Component
{
    protected $organizationRepos;

    public $organization;
    public $action;

    public $name;
    public $address;
    public $phone;
    public $mobile;
    public $email;
    public $fax;

    public function boot(OrganizationRepositoryInterface $organizationRepos) {
        $this->organizationRepos = $organizationRepos;
    }

    public function rules() {
        return [
            'name' => ['required'],
            'address' => ['nullable'],
            'phone' => ['nullable'],
            'mobile' => ['nullable'],
            'fax' => ['nullable'],
            'email' => ['nullable'],
        ];
    }

    public function messages() {
        return [
            'name.required' => 'Vui lòng điền trường này',
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

        $this->organization = $this->organizationRepos->find(abs($id));

        if ($id < 0) return;
        $this->resetErrorBag();
        $this->getData();
    }

    public function getData() {
        $this->name = $this->organization->name ?? '';
        $this->address = $this->organization->address ?? '';
        $this->phone = $this->organization->phone ?? '';
        $this->mobile = $this->organization->mobile ?? '';
        $this->fax = $this->organization->fax ?? '';
        $this->email = $this->organization->email ?? '';
    }

    public function create() {
        $this->resetErrorBag();
        $params = $this->validate();
        $organization = $this->organizationRepos->create($params);
        $this->postCrud('Đã thêm tổ chức hành nghề');
    }

    public function update() {
        $this->resetErrorBag();
        $params = $this->validate();
        $this->organization->update($params);
        $this->postCrud('Đã cập nhật thông tin tổ chức hành nghề');
    }

    public function delete() {
        $this->organization->delete();
        $this->postCrud('Đã xóa tổ chức hành nghề');
    }

    public function postCrud($message = 'Success') {
        $this->reset('organization', 'action');
        $this->dispatch('refresh')->to(OrganizationList::class);
        $this->dispatch('close-crud-organization-modal');
        $this->dispatch('show-message',
            type: 'success', 
            message: $message,
        );
    }

    public function render()
    {
        return view('admin.sections.organizations.livewire.organization-crud');
    }
}
