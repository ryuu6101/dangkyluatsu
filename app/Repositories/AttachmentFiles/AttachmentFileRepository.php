<?php

namespace App\Repositories\AttachmentFiles;

use App\Models\AttachmentFile;
use App\Repositories\BaseRepository;

class AttachmentFileRepository extends BaseRepository implements AttachmentFileRepositoryInterface
{
    public function getModel() {
        return AttachmentFile::class;
    }
}