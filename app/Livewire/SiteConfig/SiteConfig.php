<?php

namespace App\Livewire\SiteConfig;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class SiteConfig extends Component
{
    public $company_name;
    public $address;
    public $phone;
    public $mobile;
    public $default_password;

    public function mount() {
        $this->getData();
    }

    public function getData() {
        $config = DB::table('site_configs')->first();

        $this->company_name = $config->company_name ?? '';
        $this->address = $config->address ?? '';
        $this->phone = $config->phone ?? '';
        $this->phone = $config->phone ?? '';
        $this->default_password = $config->default_password ?? '';
    }

    public function save() {
        $config = DB::table('site_configs')->limit(1);
        $params = [
            'company_name' => $this->company_name,
            'address' => $this->address,
            'phone' => $this->phone,
            'mobile' => $this->mobile,
            'default_password' => $this->default_password,
        ];

        if ($config->count() > 0) {
            $config->update($params);
        } else {
            DB::table('site_configs')->insert($params);
        }

        $this->dispatch('show-message',
            type: 'success', 
            message: 'Đã lưu cấu hình',
        );

        $this->getData();
    }

    public function render()
    {
        return view('admin.sections.site-config.livewire.site-config');
    }
}
