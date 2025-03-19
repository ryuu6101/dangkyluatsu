<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SiteConfigsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'company_name' => 'Đoàn Luật sư Đà Nẵng',
                'address' => '91 Yên Bái , P.Phước Ninh , Q.Hải Châu , TP.Đà Nẵng',
                'phone' => '02362473004',
                'mobile' => '',
                'default_password' => 'Cnpt@123',
            ]
        ];

        DB::table('site_configs')->truncate();
        DB::table('site_configs')->insert($data);
    }
}
