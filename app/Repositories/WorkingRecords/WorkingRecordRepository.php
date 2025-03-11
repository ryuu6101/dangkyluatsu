<?php

namespace App\Repositories\WorkingRecords;

use App\Models\WorkingRecord;
use App\Repositories\BaseRepository;

class WorkingRecordRepository extends BaseRepository implements WorkingRecordRepositoryInterface
{
    public function getModel() {
        return WorkingRecord::class;
    }
}