<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Validation\Rule;

class CategoryLive extends Component
{
    public $categories;
    public $title;
    public $comment;
    public $is_active = false;
    public $has_private = false;
    public $editingCategoryId = null;

    public function render()
    {
        $this->categories = Category::all();
        return view('livewire.BasicInfo.category');
    }

    public function store()
    {
        $validated = $this->validateCategory();

        Category::create($validated);

        $this->resetForm();
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $this->editingCategoryId = $category->id;
        $this->title = $category->title;
        $this->comment = $category->comment;
        $this->is_active = $category->is_active;
        $this->has_private = $category->has_private;
    }

    public function update()
    {
        $validated = $this->validateCategory();

        $category = Category::findOrFail($this->editingCategoryId);
        $category->update($validated);

        $this->resetForm();
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
    }

    private function validateCategory()
    {
        return $this->validate([
            'title' => 'required',
            'comment' => 'required',
            'is_active' => 'boolean',
            'has_private' => 'boolean',
        ]);
    }

    private function resetForm()
    {
        $this->title = '';
        $this->comment = '';
        $this->is_active = false;
        $this->has_private = false;
        $this->editingCategoryId = null;
    }
}
