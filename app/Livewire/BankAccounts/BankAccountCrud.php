<?php

namespace App\Livewire\BankAccounts;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Livewire\BankAccounts\BankAccountList;
use App\Repositories\BankAccounts\BankAccountRepositoryInterface;

class BankAccountCrud extends Component
{
    use WithFileUploads;

    protected $bankAccountRepos;

    public $action;
    public $bank_account;

    public $bank_name;
    public $qr_code;

    protected $rules = [
        'bank_name' => 'required',
        'qr_code' => 'required',
    ];

    protected $messages = [
        'bank_name.required' => 'Chưa nhập tên ngân hàng',
        'qr_code.required' => 'Chưa có mã QR',
    ];

    public function boot(
        BankAccountRepositoryInterface $bankAccountRepos,
    ) {
        $this->bankAccountRepos = $bankAccountRepos;
    }

    public function modalSetup($id) {
        if ($id > 0) {
            $this->action = 'update';
        } elseif ($id < 0) {
            $this->action = 'delete';
        } else {
            $this->action = 'create';
        }

        $this->bank_account = $this->bankAccountRepos->find(abs($id));

        $this->resetErrorBag();
        $this->getData();
    }

    public function getData() {
        $this->bank_name = $this->bank_account->bank_name ?? '';
        $this->qr_code = $this->bank_account->qr_code ?? '';
    }

    public function create() {
        $this->resetErrorBag();
        $params = $this->validate();

        $path = $this->qr_code->store('public/upload');
        $params['qr_code'] = 'storage/'.substr($path, strlen('public/'));

        $bank_account = $this->bankAccountRepos->create($params);
        $this->postCrud('Đã thêm ngân hàng');
    }

    public function update() {
        $this->resetErrorBag();
        $params = $this->validate();

        if (!is_string($this->qr_code)) {
            $path = $this->qr_code->store('public/upload');
            $params['qr_code'] = 'storage/'.substr($path, strlen('public/'));
        }

        $this->bank_account->update($params);
        $this->postCrud('Đã cập nhật ngân hàng');
    }

    public function delete() {
        $this->bank_account->delete();
        $this->postCrud('Đã xóa ngân hàng');
    }

    public function postCrud($message = '') {
        $this->reset('action', 'bank_account');
        $this->dispatch('refresh')->to(BankAccountList::class);
        $this->dispatch('close-crud-bank-account-modal');
        $this->dispatch('show-message',
            type: 'success', 
            message: $message,
        );
    }

    public function render()
    {
        return view('admin.sections.bank-accounts.livewire.bank-account-crud');
    }
}
