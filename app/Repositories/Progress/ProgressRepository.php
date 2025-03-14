<?php

namespace App\Repositories\Progress;

use App\Models\Progress;
use App\Repositories\BaseRepository;

class ProgressRepository extends BaseRepository implements ProgressRepositoryInterface
{
    public function getModel() {
        return Progress::class;
    }
}