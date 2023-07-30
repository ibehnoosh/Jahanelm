<div>
    <form wire:submit.prevent="{{ $updateMode ? 'update' : 'create' }}">
        <input type="text" wire:model="title" placeholder="Locate Title">
        @error('title') <span class="error">{{ $message }}</span> @enderror

        <button type="submit">{{ $updateMode ? 'Update' : 'Save' }}</button>
    </form>

    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($locates as $locate)
            <tr>
                <td>{{ $locate->id }}</td>
                <td>{{ $locate->title }}</td>
                <td>
                    <button wire:click="edit({{ $locate->id }})">Edit</button>
                    <button wire:click="delete({{ $locate->id }})">Delete</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
