<?php


namespace App\Http\Livewire\BasicInfo;

use App\Models\Education\ClassState;
use Livewire\Component;

class ClassStateLive extends Component
{
    public $classStates, $title, $selectedClassState, $updateMode = false;

    protected $rules = [
        'title' => 'required|string|unique:class_states,title',
    ];

    public function render()
    {
        $this->classStates = ClassState::all();
        return view('livewire.BasicInfo.class_state');
    }

    public function create()
    {
        $this->validate();

        ClassState::create([
            'title' => $this->title,
        ]);

        $this->resetForm();
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $this->selectedClassState = ClassState::find($id);
        $this->title = $this->selectedClassState->title;
    }

    public function update()
    {
        $this->validate();

        $this->selectedClassState->update([
            'title' => $this->title,
        ]);

        $this->resetForm();
    }

    public function delete($id)
    {
        ClassState::find($id)->delete();
        $this->resetForm();
    }

    private function resetForm()
    {
        $this->title = '';
        $this->updateMode = false;
    }
}
