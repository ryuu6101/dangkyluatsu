<?php

namespace App\Filters;

class NotificationFilter extends QueryFilter
{
    protected $filterable = [
        'id',
        'user_id',
        'read',
    ];
    
    public function filterName($name) {
        return $this->builder->where('name', 'like', '%' . $name . '%');
    }

    public function filterText($text) {
        return $this->builder->where('title', 'like', '%'.$text.'%')->orWhere('content', 'like', '%'.$text.'%');
    }
}