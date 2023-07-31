<?php

namespace App\Http\Livewire\BasicInfo;

use App\Models\BasicInfo\Bank;
use App\Models\BasicInfo\BankAccount;
use App\Models\BasicInfo\Center;
use Livewire\Component;

class BankAccountLive extends Component
{
    public $title;
    public $account_number;
    public $card_number;
    public $is_active;
    public $bank_id;
    public $center_id;
    public $editingBankAccount;


    public function render()
    {
        $bankAccounts = BankAccount::all();
        $banks = Bank::All();
        $centers = Center::All();

        return view('livewire.BasicInfo.bank_account', compact('bankAccounts', 'banks', 'centers'));
    }

    public function create()
    {
        $this->resetFields();
    }

    public function edit($id)
    {
        $bankAccount = BankAccount::findOrFail($id);
        $this->title = $bankAccount->title;
        $this->account_number = $bankAccount->account_number;
        $this->card_number = $bankAccount->card_number;
        $this->is_active = $bankAccount->is_active;
        $this->bank_id = $bankAccount->bank_id;
        $this->center_id = $bankAccount->center_id;
        $this->editingBankAccount = $id;
    }

    public function store()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'account_number' => 'required|string|max:255',
            'card_number' => 'required|string|max:255',
            'is_active' => 'required|boolean',
            'bank_id' => 'required|exists:banks,id',
            'center_id' => 'required|exists:centers,id',
        ]);

        BankAccount::create([
            'title' => $this->title,
            'account_number' => $this->account_number,
            'card_number' => $this->card_number,
            'is_active' => $this->is_active,
            'bank_id' => $this->bank_id,
            'center_id' => $this->center_id,
        ]);

        $this->resetFields();
    }

    public function update()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'account_number' => 'required|string|max:255',
            'card_number' => 'required|string|max:255',
            'is_active' => 'required|boolean',
            'bank_id' => 'required|exists:banks,id',
            'center_id' => 'required|exists:centers,id',
        ]);

        $bankAccount = BankAccount::findOrFail($this->editingBankAccount);
        $bankAccount->update([
            'title' => $this->title,
            'account_number' => $this->account_number,
            'card_number' => $this->card_number,
            'is_active' => $this->is_active,
            'bank_id' => $this->bank_id,
            'center_id' => $this->center_id,
        ]);

        $this->resetFields();
    }

    public function delete($id)
    {
        BankAccount::findOrFail($id)->delete();
    }

    private function resetFields()
    {
        $this->title = '';
        $this->account_number = '';
        $this->card_number = '';
        $this->is_active = null;
        $this->bank_id = null;
        $this->center_id = null;
        $this->editingBankAccount = null;
    }
}

