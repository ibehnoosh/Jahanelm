<?php

// app/Http/Livewire/GroupController.php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Group;
use App\Models\Category;
use Livewire\WithPagination;

class GroupLive extends Component
{
    use WithPagination;

    public $title;
    public $comment;
    public $is_active = false;
    public $order;
    public $category_id;

    public $selectedGroupId;
    public $search = '';

    public $editing = false;
    protected $paginationTheme = 'bootstrap';

    protected $rules = [
        'title' => 'required',
        'comment' => 'required',
        'is_active' => 'boolean',
        'order' => 'integer',
        'category_id' => 'required|exists:categories,id',
    ];

    public function render()
    {
        $groups = Group::with('category')->paginate(5);
        $categories = Category::all();

        return view('livewire.BasicInfo.group', compact('groups', 'categories'));
    }

    public function create()
    {
        $this->resetValidation();
        $this->resetFields();
        $this->editing = false;
    }

    public function store()
    {
        $this->validate();

        Group::create([
            'title' => $this->title,
            'comment' => $this->comment,
            'is_active' => $this->is_active,
            'order' => $this->order,
            'category_id' => $this->category_id,
        ]);

        $this->resetFields();
        $this->emit('groupCreated');
    }

    public function edit($id)
    {
        $group = Group::findOrFail($id);

        $this->selectedGroupId = $group->id;
        $this->title = $group->title;
        $this->comment = $group->comment;
        $this->is_active = $group->is_active;
        $this->order = $group->order;
        $this->category_id = $group->category_id;

        $this->editing = true;
    }

    public function update()
    {
        $this->validate();

        $group = Group::findOrFail($this->selectedGroupId);

        $group->update([
            'title' => $this->title,
            'comment' => $this->comment,
            'is_active' => $this->is_active,
            'order' => $this->order,
            'category_id' => $this->category_id,
        ]);

        $this->resetFields();
        $this->editing = false;
        $this->emit('groupUpdated');
    }

    public function delete($id)
    {
        $group = Group::findOrFail($id);
        $group->delete();

        $this->resetFields();
        $this->emit('groupDeleted');
    }

    private function resetFields()
    {
        $this->title = '';
        $this->comment = '';
        $this->is_active = false;
        $this->order = null;
        $this->category_id = null;
    }
    public function updatingSearch()
    {
        $this->resetPage();
    }
}
