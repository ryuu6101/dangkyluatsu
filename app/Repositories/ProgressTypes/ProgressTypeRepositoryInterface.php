<?php

namespace App\Repositories\ProgressTypes;

use App\Repositories\RepositoryInterface;

interface ProgressTypeRepositoryInterface extends RepositoryInterface
{
    public function getBySlug($slug);
}