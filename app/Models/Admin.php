<?php

namespace App\Models;

use App\Traits\Filterable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory, Filterable;

    protected $guarded = ['id'];

    public function role() {
        return $this->belongsTo(Role::class, 'role_id');
    }
}
