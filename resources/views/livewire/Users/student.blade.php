<div class="row">
    <form wire:submit.prevent="{{ $editingStudent ? 'update' : 'store' }}">
        <input type="text" wire:model="name" placeholder="Name">
        <input type="text" wire:model="family" placeholder="Family">
        <input type="text" wire:model="mobile" placeholder="Mobile">
        <select wire:model="center_id">
            <option value="">مرکز</option>
            @foreach ($centers as $center)
                <option value="{{ $center->id }}">{{ $center->title }}</option>
            @endforeach
        </select>
        <button type="submit">{{ $editingStudent ? 'Update' : 'Create' }}</button>
        <button wire:click.prevent="create">New</button>
    </form>
</div>
<div class="row">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">شماره</th>
            <th scope="col">نام</th>
            <th scope="col">فامیل</th>
            <th scope="col">موبایل</th>
            <th scope="col">مرکز</th>
            <th scope="col">عملیات</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->family }}</td>
                <td>{{ $student->mobile }}</td>
                <td>{{ optional($student->center)->title }}</td>
                <td>
                    <button wire:click="edit({{ $student->id }})">Edit</button>
                    <button wire:click="delete({{ $student->id }})">Delete</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
