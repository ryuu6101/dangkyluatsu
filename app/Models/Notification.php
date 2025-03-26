<?php

namespace App\Models;

use App\Traits\Filterable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Notification extends Model
{
    use HasFactory, Filterable;

    protected $guarded = ['id'];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
