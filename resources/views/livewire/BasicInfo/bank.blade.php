<div>
    <form wire:submit.prevent="{{ $updateMode ? 'update' : 'create' }}">
        <input type="text" wire:model="title" placeholder="Bank Title">
        @error('title') <span class="error">{{ $message }}</span> @enderror

        <button type="submit">{{ $updateMode ? 'Update' : 'Save' }}</button>
    </form>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($banks as $bank)
            <tr>
                <td>{{ $bank->id }}</td>
                <td>{{ $bank->title }}</td>
                <td>
                    <button wire:click="edit({{ $bank->id }})">Edit</button>
                    <button wire:click="delete({{ $bank->id }})">Delete</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
