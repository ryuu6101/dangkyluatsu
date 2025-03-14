<?php

namespace App\Repositories\ProgressTypes;

use App\Models\ProgressType;
use App\Repositories\BaseRepository;

class ProgressTypeRepository extends BaseRepository implements ProgressTypeRepositoryInterface
{
    public function getModel() {
        return ProgressType::class;
    }

    public function getBySlug($slug) {
        return $this->model->where('slug', $slug)->first();
    }
}