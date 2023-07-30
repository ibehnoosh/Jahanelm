<div>
    <form wire:submit.prevent="{{ $editingHour ? 'update' : 'store' }}">
        <input type="text" wire:model="title" placeholder="Title">
        <input type="text" wire:model="start" placeholder="Start">
        <input type="number" wire:model="session" placeholder="Session">
        <input type="number" wire:model="total" placeholder="Total">
        <button type="submit">{{ $editingHour ? 'Update' : 'Create' }}</button>
</form>

    <table class="table table-bordered">
    <thead>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Start -End</th>
        <th>Session</th>
        <th>Total (Minutes)</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($hours as $hour)
        <tr>
            <td>{{ $hour->id }}</td>
            <td>{{ $hour->title }}</td>
            <td>{{ $hour->start }}</td>
            <td>{{ $hour->session }}</td>
            <td>{{ $hour->total }}</td>
            <td><button wire:click="edit({{ $hour->id }})">Edit</button>
                <button wire:click="delete({{ $hour->id }})">Delete</button></td>

        </tr>
    @endforeach
    </tbody>
    </table>

</div>

