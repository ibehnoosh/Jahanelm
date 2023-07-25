<?php
namespace App\Http\Livewire;

use App\Models\BasicInfo\Group;
use App\Models\BasicInfo\Level;
use Livewire\Component;
use Livewire\WithPagination;

class LevelLive extends Component
{
    use WithPagination;

    public $title;
    public $comment;
    public $is_active = false;
    public $is_free = false;
    public $order;
    public $group_id;

    public $selectedLevelId;
    public $editing = false;
    protected $paginationTheme = 'bootstrap';

    protected $rules = [
        'title' => 'required',
        'comment' => 'required',
        'is_active' => 'boolean',
        'is_free' => 'boolean',
        'order' => 'integer',
        'group_id' => 'required|exists:groups,id',
    ];

    public function render()
    {
        $levels = Level::with('group')->paginate(10);
        $groups = Group::all();

        return view('livewire.BasicInfo.level', compact('levels', 'groups'));
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

        Level::create([
            'title' => $this->title,
            'comment' => $this->comment,
            'is_active' => $this->is_active,
            'is_free' => $this->is_free,
            'order' => $this->order,
            'group_id' => $this->group_id,
        ]);

        $this->resetFields();
        $this->emit('levelCreated');
    }

    public function edit($id)
    {
        $level = Level::findOrFail($id);

        $this->selectedLevelId = $level->id;
        $this->title = $level->title;
        $this->comment = $level->comment;
        $this->is_active = $level->is_active;
        $this->is_free = $level->is_free;
        $this->order = $level->order;
        $this->group_id = $level->group_id;

        $this->editing = true;
    }

    public function update()
    {
        $this->validate();

        $level = Level::findOrFail($this->selectedLevelId);

        $level->update([
            'title' => $this->title,
            'comment' => $this->comment,
            'is_active' => $this->is_active,
            'is_free' => $this->is_free,
            'order' => $this->order,
            'group_id' => $this->group_id,
        ]);

        $this->resetFields();
        $this->editing = false;
        $this->emit('levelUpdated');
    }

    public function delete($id)
    {
        $level = Level::findOrFail($id);
        $level->delete();

        $this->resetFields();
        $this->emit('levelDeleted');
    }

    private function resetFields()
    {
        $this->title = '';
        $this->comment = '';
        $this->is_active = false;
        $this->is_free = false;
        $this->order = null;
        $this->group_id = null;
    }
}
