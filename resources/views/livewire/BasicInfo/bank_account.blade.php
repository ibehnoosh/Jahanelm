<div>
    <form wire:submit.prevent="{{ $editingBankAccount ? 'update' : 'store' }}">
        <input type="text" wire:model="title" placeholder="Title">
        <input type="text" wire:model="account_number" placeholder="Account Number">
        <input type="text" wire:model="card_number" placeholder="Card Number">
        <input type="checkbox" wire:model="is_active"> Is Active
        <select wire:model="bank_id">
            @foreach ($banks as $bank)
                <option value="{{ $bank->id }}">{{ $bank->title }}</option>
            @endforeach
        </select>
        <select wire:model="center_id">
            @foreach ($centers as $center)
                <option value="{{ $center->id }}">{{ $center->title }}</option>
            @endforeach
        </select>
        <button type="submit">{{ $editingBankAccount ? 'Update' : 'Create' }}</button>
    </form>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>عنوان</th>
            <th>َشماره حساب</th>
            <th>َشماره کارت</th>
            <th>َوضعیت</th>
            <th>بانک</th>
            <th>مرکز</th>
            <th>عملیات</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($bankAccounts as $bankAccount)
            <tr>
                <td>{{ $bankAccount->id }}</td>
                <td>{{ $bankAccount->title }}</td>
                <td>{{ $bankAccount->account_number }}</td>
                <td>{{ $bankAccount->card_number }}</td>
                <td>{{ $bankAccount->is_active ? 'Active' : 'Inactive' }}</td>
                <td>{{ $bankAccount->bank->title }}</td>
                <td>{{ $bankAccount->center->title }}</td>
                <td><button wire:click="edit({{ $bankAccount->id }})">Edit</button>
                    <button wire:click="delete({{ $bankAccount->id }})">Delete</button></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
