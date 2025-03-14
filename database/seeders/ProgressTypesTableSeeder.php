<?php

namespace Database\Seeders;

use App\Models\ProgressType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProgressTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Quá trình đăng ký tập sự',
                'slug' => 'qua-trinh-dang-ky-tap-su',
            ],
            [
                'name' => 'Quá trình kết nạp và nhận thẻ LS',
                'slug' => 'qua-trinh-ket-nap-va-nhan-the-ls',
            ],
            [
                'name' => 'Quá trình xin cấp/cấp lại CCHN',
                'slug' => 'qua-trinh-xin-cap-cap-lai-cchn',
            ]
        ];

        ProgressType::truncate();
        ProgressType::insert($data);
    }
}
