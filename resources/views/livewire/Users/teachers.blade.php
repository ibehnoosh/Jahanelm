<div>
    <form wire:submit.prevent="{{ $updateMode ? 'update' : 'create' }}">

        <input type="text" wire:model="name" placeholder="TeacherName ">
        @error('name') <span class="error">{{ $message }}</span> @enderror

        <input type="text" wire:model="family" placeholder="Teacherfamily ">
        @error('family') <span class="error">{{ $message }}</span> @enderror

        <input type="text" wire:model="father" placeholder="Teacher Father">
        @error('father') <span class="error">{{ $message }}</span> @enderror

        <input type="text" wire:model="mobile" placeholder="Teacher mobile ">
        @error('mobile') <span class="error">{{ $message }}</span> @enderror

        <input type="text" wire:model="tel" placeholder="Teacher tel ">
        @error('tel') <span class="error">{{ $message }}</span> @enderror

        <input type="text" wire:model="address" placeholder="Teacher Address ">
        @error('address') <span class="error">{{ $message }}</span> @enderror

        <button type="submit">{{ $updateMode ? 'Update' : 'Save' }}</button>
    </form>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>family</th>
            <th>father</th>
            <th>tel</th>
            <th>mobile</th>
            <th>address</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($teachers as $teacher)
            <tr>
                <td>{{ $teacher->id }}</td>
                <td>{{ $teacher->name }}</td>
                <td>{{ $teacher->family }}</td>
                <td>{{ $teacher->father }}</td>
                <td>{{ $teacher->tel }}</td>
                <td>{{ $teacher->mobile }}</td>
                <td>{{ $teacher->address }}</td>
                <td>
                    <button wire:click="edit({{ $teacher->id }})">Edit</button>
                    <button wire:click="delete({{ $teacher->id }})">Delete</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
