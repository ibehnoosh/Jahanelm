<div>
    <input type="text" wire:model="name" placeholder="Search by Name">
    <input type="text" wire:model="family" placeholder="Search by Family">
    <input type="text" wire:model="mobile" placeholder="Search by Mobile">
    <input type="text" wire:model="meli" placeholder="Search by Meli">

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Family</th>
            <th>Mobile</th>
            <th>Meli</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->family }}</td>
                <td>{{ $student->mobile }}</td>
                <td>{{ $student->meli }}</td>
                <td>
                    <a href="{{ route('studentEdit', ['studentId' => $student->id]) }}">Edit</a>
                    <button wire:click="resetPassword({{ $student->id }})">Reset Password</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $students->links() }}

</div>


