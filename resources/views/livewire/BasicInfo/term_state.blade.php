<div>
    <form wire:submit.prevent="{{ $updateMode ? 'update' : 'create' }}">
        <input type="text" wire:model="title" placeholder="Term State Title">
        @error('title') <span class="error">{{ $message }}</span> @enderror

        <input type="text" wire:model="color" placeholder="Color">
        @error('color') <span class="error">{{ $message }}</span> @enderror

        <button type="submit">{{ $updateMode ? 'Update' : 'Save' }}</button>
    </form>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Color</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($termStates as $termState)
            <tr>
                <td>{{ $termState->id }}</td>
                <td>{{ $termState->title }}</td>
                <td>{{ $termState->color }}</td>
                <td>
                    <button wire:click="edit({{ $termState->id }})">Edit</button>
                    <button wire:click="delete({{ $termState->id }})">Delete</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
