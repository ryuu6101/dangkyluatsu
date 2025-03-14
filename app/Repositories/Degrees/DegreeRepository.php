<?php

namespace App\Repositories\Degrees;

use App\Models\Degree;
use App\Repositories\BaseRepository;

class DegreeRepository extends BaseRepository implements DegreeRepositoryInterface
{
    public function getModel() {
        return Degree::class;
    }
}