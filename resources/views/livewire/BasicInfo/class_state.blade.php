<div>
    <form wire:submit.prevent="{{ $updateMode ? 'update' : 'create' }}">
        <input type="text" wire:model="title" placeholder="Class State Title">
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
        @foreach ($classStates as $classState)
            <tr>
                <td>{{ $classState->id }}</td>
                <td>{{ $classState->title }}</td>
                <td>
                    <button wire:click="edit({{ $classState->id }})">Edit</button>
                    <button wire:click="delete({{ $classState->id }})">Delete</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
