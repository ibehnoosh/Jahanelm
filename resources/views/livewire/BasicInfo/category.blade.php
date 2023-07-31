<div class="card-body">
    <div>
        <form wire:submit.prevent="{{ $editing ? 'update' : 'store' }}">
            <div>
                <label for="title">Title:</label>
                <input class="form-control form-control-solid" type="text" wire:model="title">
                @error('title') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="comment">Comment:</label>
                <input class="form-control form-control-solid" type="text" wire:model="comment">
                @error('comment') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="is_active">Is Active:</label>
                <input class="" type="checkbox" wire:model="is_active">
            </div>

            <div>
                <label for="has_private">Has Private:</label>
                <input class="" type="checkbox" wire:model="has_private">
            </div>

            <button class="btn btn-primary" type="submit">{{ $editing ? 'Update' : 'Create' }} Level</button>
            @if($editing)
                <button class="btn btn-light-primary" type="button" wire:click="cancelEdit">Cancel</button>
            @endif

        </form>
    </div>
    <div class="table-responsive">
        <table class="table align-middle gs-0 gy-4">
            <thead>
            <tr class="fw-bold text-muted bg-light">
                <th>Title</th>
                <th>Is active</th>
                <th>Has Private</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->title }}
                        <span class="text-muted fw-semibold text-muted d-block fs-7">{{ $category->comment }}</span>
                    </td>
                    <td>
                        {{ $category->is_active }}
                    </td>
                    <td>
                        {{ $category->has_private }}
                    </td>
                    <td>
                        <button wire:click="edit({{ $category->id }})">Edit</button>
                        <button wire:click="delete({{ $category->id }})">Delete</button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</div>
