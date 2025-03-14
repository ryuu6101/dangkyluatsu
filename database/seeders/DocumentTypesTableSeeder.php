<?php

namespace Database\Seeders;

use App\Models\DocumentType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DocumentTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'GIẤY ĐỀ NGHỊ ĐĂNG KÝ TẬP SỰ HÀNH NGHỀ LUẬT SƯ'],
            ['name' => 'GIẤY ĐỀ NGHỊ GIA NHẬP ĐOÀN LUẬT SƯ'],
            ['name' => 'GIẤY ĐỀ NGHỊ CẤP THẺ LUẬT SƯ'],
            ['name' => 'GIẤY ĐỀ NGHỊ ĐỔI THẺ LUẬT SƯ'],
        ];

        DocumentType::truncate();
        DocumentType::insert($data);
    }
}
