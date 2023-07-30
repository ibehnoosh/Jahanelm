<div>
    <form wire:submit.prevent="{{ $updateMode ? 'update' : 'create' }}">
        <input type="text" wire:model="title" placeholder="center Title">
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
        @foreach ($centers as $center)
            <tr>
                <td>{{ $center->id }}</td>
                <td>{{ $center->title }}</td>
                <td>
                    <button wire:click="edit({{ $center->id }})">Edit</button>
                    <button wire:click="delete({{ $center->id }})">Delete</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
