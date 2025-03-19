<?php

namespace App\Filters;

class DocumentFilter extends QueryFilter
{
    protected $filterable = [
        'id',
        'document_status_id',
    ];
    
    public function filterFullname($name) {
        return $this->builder->where('fullname', 'like', '%' . $name . '%');
    }

    public function filterCreatedAtStart($date) {
        return $this->builder->whereDate('created_at', '>=', $date);
    }

    public function filterCreatedAtEnd($date) {
        return $this->builder->whereDate('created_at', '<=', $date);
    }
}