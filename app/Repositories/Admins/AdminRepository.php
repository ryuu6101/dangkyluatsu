<?php

namespace App\Repositories\Admins;

use App\Models\Admin;
use App\Repositories\BaseRepository;

class AdminRepository extends BaseRepository implements AdminRepositoryInterface
{
    public function getModel() {
        return Admin::class;
    }
}