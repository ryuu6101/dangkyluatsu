<?php

namespace App\Filters;

class BankAccountFilter extends QueryFilter
{
    protected $filterable = [
        'id',
    ];
    
    public function filterBankName($name) {
        return $this->builder->where('bank_name', 'like', '%' . $name . '%');
    }
}