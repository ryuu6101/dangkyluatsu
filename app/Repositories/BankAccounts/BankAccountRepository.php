<?php

namespace App\Repositories\BankAccounts;

use App\Models\BankAccount;
use App\Repositories\BaseRepository;

class BankAccountRepository extends BaseRepository implements BankAccountRepositoryInterface
{
    public function getModel() {
        return BankAccount::class;
    }
}