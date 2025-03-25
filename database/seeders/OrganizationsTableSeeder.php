<?php

namespace Database\Seeders;

use App\Models\Organization;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OrganizationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Đoàn luật sư TP. Đà Nẵng',
                'address' => 'Đà Nẵng',
                'phone' => '0123456789',
                'mobile' => '199999555',
                'fax' => '',
                'email' => 'test@gmail.com'
            ]
        ];

        Organization::truncate();
        Organization::insert($data);
    }
}
