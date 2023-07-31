<?php


namespace App\Http\Livewire\BasicInfo;

use App\Models\BasicInfo\Center;
use Livewire\Component;

class CenterLive extends Component
{
    public $centers, $title, $selectedCenter, $updateMode = false;

    protected $rules = [
        'title' => 'required|string|unique:Centers,title',
    ];

    public function render()
    {
        $this->centers = Center::all();
        return view('livewire.BasicInfo.center');
    }

    public function create()
    {
        $this->validate();

        Center::create([
            'title' => $this->title,
        ]);

        $this->resetForm();
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $this->selectedCenter = Center::find($id);
        $this->title = $this->selectedCenter->title;
    }

    public function update()
    {
        $this->validate();

        $this->selectedCenter->update([
            'title' => $this->title,
        ]);

        $this->resetForm();
    }

    public function delete($id)
    {
        Center::find($id)->delete();
        $this->resetForm();
    }

    private function resetForm()
    {
        $this->title = '';
        $this->updateMode = false;
    }
}
