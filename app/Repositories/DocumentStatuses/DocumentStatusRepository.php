<?php

namespace App\Repositories\DocumentStatuses;

use App\Models\DocumentStatus;
use App\Repositories\BaseRepository;

class DocumentStatusRepository extends BaseRepository implements DocumentStatusRepositoryInterface
{
    public function getModel() {
        return DocumentStatus::class;
    }
}