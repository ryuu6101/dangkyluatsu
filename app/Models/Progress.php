<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    use HasFactory;

    protected $table = 'progresses';

    protected $guarded = ['id'];

    public function type() {
        return $this->belongsTo(ProgressType::class, 'progress_type_id');
    }

    public function document() {
        return $this->belongsTo(Document::class, 'document_id');
    }
}
