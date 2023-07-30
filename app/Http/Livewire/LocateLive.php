<?php


namespace App\Http\Livewire;

use App\Models\BasicInfo\Locate;
use Livewire\Component;

class LocateLive extends Component
{
    public $locates, $title, $selectedLocate, $updateMode = false;

    protected $rules = [
        'title' => 'required|string|unique:locates,title',
    ];

    public function render()
    {
        $this->locates = Locate::all();
        return view('livewire.BasicInfo.locate');
    }

    public function create()
    {
        $this->validate();

        Locate::create([
            'title' => $this->title,
        ]);

        $this->resetForm();
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $this->selectedLocate = Locate::find($id);
        $this->title = $this->selectedLocate->title;
    }

    public function update()
    {
        $this->validate();

        $this->selectedLocate->update([
            'title' => $this->title,
        ]);

        $this->resetForm();
    }

    public function delete($id)
    {
        Locate::find($id)->delete();
        $this->resetForm();
    }

    private function resetForm()
    {
        $this->title = '';
        $this->updateMode = false;
    }
}
