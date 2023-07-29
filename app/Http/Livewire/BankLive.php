<?php


namespace App\Http\Livewire;

use App\Models\BasicInfo\Bank;
use Livewire\Component;

class BankLive extends Component
{
    public $banks, $title, $selectedBank, $updateMode = false;

    protected $rules = [
        'title' => 'required|string|unique:banks,title',
    ];

    public function render()
    {
        $this->banks = Bank::all();
        return view('livewire.BasicInfo.bank');
    }

    public function create()
    {
        $this->validate();

        Bank::create([
            'title' => $this->title,
        ]);

        $this->resetForm();
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $this->selectedBank = Bank::find($id);
        $this->title = $this->selectedBank->title;
    }

    public function update()
    {
        $this->validate();

        $this->selectedBank->update([
            'title' => $this->title,
        ]);

        $this->resetForm();
    }

    public function delete($id)
    {
        Bank::find($id)->delete();
        $this->resetForm();
    }

    private function resetForm()
    {
        $this->title = '';
        $this->updateMode = false;
    }
}
