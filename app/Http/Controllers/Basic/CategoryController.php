<?php

namespace App\Http\Controllers\Basic;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return $categories;
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'bail|required',
            'comment' => 'required',
            'is_active' => 'boolean',
            'has_private' => 'boolean',
        ]);

        $category = Category::create($validated);

    }

    public function show(int $id)
    {
        $category = Category::findOrFail($id);
        return response()->json($category);
    }

    public function update(Request $request, int $id)
    {
        $validated = $request->validate([
            'title' => 'bail|required',
            'comment' => 'required',
            'is_active' => 'boolean',
            'has_private' => 'boolean',
        ]);

        $category = Category::findOrFail($id);
        $category->update($validated);

    }

    public function destroy(int $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
    }
}
