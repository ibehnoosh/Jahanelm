<div class="card-body py-3">
    <div>
        <form wire:submit.prevent="{{ $editing ? 'update' : 'store' }}">
                    <div>
                        <label for="title">Title:</label>
                        <input type="text" wire:model="title">
                        @error('title') <span class="error">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label for="comment">Comment:</label>
                        <input type="text" wire:model="comment">
                        @error('comment') <span class="error">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label for="is_active">Is Active:</label>
                        <input type="checkbox" wire:model="is_active">
                    </div>

                    <div>
                        <label for="order">Order:</label>
                        <input type="number" wire:model="order">
                        @error('order') <span class="error">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label for="category_id">Category:</label>
                        <select wire:model="category_id">
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                        @error('category_id') <span class="error">{{ $message }}</span> @enderror
                    </div>

                    <button type="submit">{{ $editing ? 'Update' : 'Create' }} Group</button>
                    @if($editing)
                        <button type="button" wire:click="cancelEdit">Cancel</button>
                    @endif

        </form>
    </div>
    <div class="table-responsive">
        <table class="table align-middle gs-0 gy-4">
            <thead>
            <tr class="fw-bold text-muted bg-light">
                <th>Title</th>
                <th>Category</th>
                <th>Is active</th>
                <th>Order</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($groups as $group)
                <tr>
                    <td>{{ $group->title }}
                        <span class="text-muted fw-semibold text-muted d-block fs-7">{{ $group->comment }}</span>
                    </td>
                    <td>
                        {{ $group->is_active }}
                    </td>
                    <td>
                        {{ $group->order }}
                    </td>
                    <td>
                        <button wire:click="edit({{ $group->id }})">Edit</button>
                        <button wire:click="delete({{ $group->id }})">Delete</button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    <div>
        {{ $groups->links() }}
    </div>
    </div>

</div>
