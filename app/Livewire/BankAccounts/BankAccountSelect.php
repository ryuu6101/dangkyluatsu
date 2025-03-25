<?php

namespace App\Livewire\BankAccounts;

use Livewire\Component;
use App\Repositories\BankAccounts\BankAccountRepositoryInterface;

class BankAccountSelect extends Component
{
    protected $bankAccountRepos;

    public $bank_accounts;
    public $bank_account;
    public $bank_account_id = '';
    public $progress_type_id;

    public function boot(
        BankAccountRepositoryInterface $bankAccountRepos,
    ) {
        $this->bankAccountRepos = $bankAccountRepos;
    }

    public function mount($progress_type_id) {
        $this->progress_type_id = $progress_type_id;
        $this->bank_accounts = $this->bankAccountRepos->getAll();
    }

    public function render()
    {
        $this->bank_account = $this->bankAccountRepos->find($this->bank_account_id);
        return view('user.sections.my-progress.livewire.bank-account-select');
    }
}
