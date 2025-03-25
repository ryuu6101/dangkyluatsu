<?php

namespace App\Livewire\BankAccounts;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\BankAccounts\BankAccountRepositoryInterface;

class BankAccountList extends Component
{
    use WithPagination;

    protected $bankAccountRepos;

    public $params = [];
    public $paginate = 10;

    protected $listeners = ['refresh' => '$refresh'];

    public function boot(
        BankAccountRepositoryInterface $bankAccountRepos,
    ) {
        $this->bankAccountRepos = $bankAccountRepos;
    }

    public function render()
    {
        $bank_accounts = $this->bankAccountRepos->filter($this->params, $this->paginate);
        return view('admin.sections.bank-accounts.livewire.bank-account-list')->with([
            'bank_accounts' => $bank_accounts,
        ]);
    }
}
