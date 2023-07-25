<div class="card-body py-3">
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
                        <label for="order">Order:</label>
                        <input class="form-control form-control-solid" type="number" wire:model="order">
                        @error('order') <span class="error">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label for="group_id">Category:</label>
                        <select class="form-control form-control-solid" wire:model="group_id">
                            <option value="">Select Group</option>
                            @foreach($groups as $group)
                                <option value="{{ $group->id }}">{{ $group->title }}</option>
                            @endforeach
                        </select>
                        @error('category_id') <span class="error">{{ $message }}</span> @enderror
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
                <th>Group</th>
                <th>Category</th>
                <th>Is active</th>
                <th>Order</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($levels as $level)
                <tr>
                    <td>{{ $level->title }}
                        <span class="text-muted fw-semibold text-muted d-block fs-7">{{ $level->comment }}</span>
                    </td>
                    <td>
                        {{ $level->group->title }}
                    </td>
                    <td>
                        {{ $level->group->category->title }}
                    </td>
                    <td>
                        {{ $level->is_active }}
                    </td>
                    <td>
                        {{ $level->order }}
                    </td>
                    <td>
                        <button wire:click="edit({{ $level->id }})">Edit</button>
                        <button wire:click="delete({{ $level->id }})">Delete</button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    <div>
        {{ $levels->links() }}
    </div>
    </div>

</div>
