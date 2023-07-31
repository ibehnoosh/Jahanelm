<?php


namespace App\Http\Livewire\BasicInfo;

use App\Models\BasicInfo\Hour;
use Livewire\Component;

class HourLive extends Component
{
    public $title;
    public $hours;
    public $start;
    public $session;
    public $total;
    public $editingHour;

    public function render()
    {
        $this->hours = Hour::all();

        return view('livewire.BasicInfo.hour');
    }

    public function create()
    {
        $this->resetFields();
    }

    public function edit($id)
    {
        $hour = Hour::findOrFail($id);
        $this->title = $hour->title;
        $this->start = $hour->start;
        $this->session = $hour->session;
        $this->total = $hour->total;
        $this->editingHour = $id;
    }

    public function store()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'start' => 'required|string|max:11',
            'session' => 'required|integer',
            'total' => 'required|integer',
        ]);

        Hour::create([
            'title' => $this->title,
            'start' => $this->start,
            'session' => $this->session,
            'total' => $this->total,
        ]);

        $this->resetFields();
    }

    public function update()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'start' => 'required|string|max:11',
            'session' => 'required|integer',
            'total' => 'required|integer',
        ]);

        $hour = Hour::findOrFail($this->editingHour);
        $hour->update([
            'title' => $this->title,
            'start' => $this->start,
            'session' => $this->session,
            'total' => $this->total,
        ]);

        $this->resetFields();
    }

    public function delete($id)
    {
        Hour::findOrFail($id)->delete();
    }

    private function resetFields()
    {
        $this->title = '';
        $this->start = '';
        $this->session = null;
        $this->total = null;
        $this->editingHour = null;
    }
}
