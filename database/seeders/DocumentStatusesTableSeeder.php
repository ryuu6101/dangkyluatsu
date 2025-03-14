<?php

namespace Database\Seeders;

use App\Models\DocumentStatus;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DocumentStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Đang chờ duyệt'],
            ['name' => 'Đang tiến hành'],
            ['name' => 'Đã hoàn thành'],
            ['name' => 'Đã bị từ chối'],
        ];

        DocumentStatus::truncate();
        DocumentStatus::insert($data);
    }
}
