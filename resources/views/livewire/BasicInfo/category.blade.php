<div class="row>
    <div class="col-md-4 offset-md-8">
        <form wire:submit.prevent="{{ $editingCategoryId ? 'update' : 'store' }}">
            <div class="form-row align-items-end">
                <div class="col-md-6">
                    <input type="text" wire:model="title" placeholder="Title">
                </div>
                <div class="col-md-6">
                    <input type="text" wire:model="comment" placeholder="Comment">
                </div>
                <div class="col-md-6">
                    <input type="checkbox" wire:model="is_active"> Is Active?
                </div>
                <div class="col-md-6">
                    <input type="checkbox" wire:model="has_private"> Has Private?
                </div>
                <div class="col-md-6">
                    <button type="submit">
                        {{ $editingCategoryId ? 'Update Category' : 'Create Category' }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Is active</th>
                <th scope="col">Has private</th>
                <th scope="col">Operation</th>
            </tr>
            </thead>
            <tbody>

            @foreach($categories as $category)
                <tr>
                    <td> {{ $category->title }}
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
                        <button wire:click="destroy({{ $category->id }})">Delete</button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
