<?php

namespace App\Filters;

class AdminFilter extends QueryFilter
{
    protected $filterable = [
        'id',
    ];
    
    public function filterUsername($name) {
        return $this->builder->where('username', 'like', '%' . $name . '%');
    }
}