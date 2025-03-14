<?php

namespace App\Filters;

class DocumentFilter extends QueryFilter
{
    protected $filterable = [
        'id',
    ];
    
    public function filterName($name) {
        return $this->builder->where('name', 'like', '%' . $name . '%');
    }
}