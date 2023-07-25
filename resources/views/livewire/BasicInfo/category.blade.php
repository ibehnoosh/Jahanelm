<div class="card-body py-3">
    <div>
        <form wire:submit.prevent="{{ $editingCategoryId ? 'update' : 'store' }}">
            <input type="text" wire:model="title" placeholder="Title">
            <input type="text" wire:model="comment" placeholder="Comment">
            <input type="checkbox" wire:model="is_active"> Is Active?
            <input type="checkbox" wire:model="has_private"> Has Private?

            <button type="submit">
                {{ $editingCategoryId ? 'Update Category' : 'Create Category' }}
            </button>
        </form>
    </div>
    <div class="table-responsive">
        <table class="table align-middle gs-0 gy-4">
            <thead>
            <tr class="fw-bold text-muted bg-light">
                <th class="min-w-125px">Title</th>
                <th class="min-w-200px">Is active</th>
                <th class="min-w-150px">Has private</th>
                <th class="min-w-200px text-end rounded-end"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>
                        <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6"> {{ $category->title }} </a>
                        <span class="text-muted fw-semibold text-muted d-block fs-7">{{ $category->comment }}</span>
                    </td>

                    <td>
                        <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6"> {{ $category->is_active }} </a>
                    </td>

                    <td>
                        <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6"> {{ $category->has_private }} </a>
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
