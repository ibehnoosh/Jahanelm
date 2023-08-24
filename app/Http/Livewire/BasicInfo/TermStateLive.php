<?php


namespace App\Http\Livewire\BasicInfo;

use App\Models\Education\TermState;
use Livewire\Component;

class TermStateLive extends Component
{
    public $termStates, $title, $selectedTermState, $updateMode = false;

    protected $rules = [
        'title' => 'required|string',
    ];

    public function render()
    {
        $this->termStates = TermState::all();
        return view('livewire.BasicInfo.term_state');
    }

    public function create()
    {
        $this->validate();

        TermState::create([
            'title' => $this->title,
            'color' => $this->color,
        ]);

        $this->resetForm();
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $this->selectedTermState = TermState::find($id);
        $this->title = $this->selectedTermState->title;
        $this->color = $this->selectedTermState->color;
    }

    public function update()
    {
        $this->validate();

        $this->selectedTermState->update([
            'title' => $this->title,
            'color' => $this->color,
        ]);

        $this->resetForm();
    }

    public function delete($id)
    {
        TermState::find($id)->delete();
        $this->resetForm();
    }

    private function resetForm()
    {
        $this->title = '';
        $this->updateMode = false;
    }
}
