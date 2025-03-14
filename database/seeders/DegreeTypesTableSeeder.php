<?php

namespace Database\Seeders;

use App\Models\DegreeType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DegreeTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Bằng cử nhân Luật sư'],
            ['name' => 'Giấy chứng nhận tốt nghiệp'],
            ['name' => 'Chứng chỉ hành nghề luật sư'],
        ];

        DegreeType::truncate();
        DegreeType::insert($data);
    }
}
