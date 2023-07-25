<?php

namespace App\Http\Controllers\Basic;

use App\Http\Controllers\Controller;
use App\Models\BasicInfo\Category;
use App\Models\BasicInfo\Group;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class GroupController extends Controller
{
    public function index()
    {
        $groups= Group::all();
        return view('basic.group.index',compact('groups'));
    }

    public function create()
    {
        $categories=Category::all();
        return view('basic.group.create' , compact('categories'));
    }
    public function store(Request $request): RedirectResponse
    {
        $group = new Group();
        $group->title = $request->title;
        $group->comment = $request->comment;
        $group->is_active = $request->is_active;
        $group->order = $request->order;
        $group->category_id = $request->category;

        $validated = $request->validate([
            'title' => 'bail|required',
            'category' => 'required',
            'is_active'=>'boolean',
            'order'=>'integer',
        ]);
        $group->save();

        return redirect()->route('groups.index')->with('success', 'Group created successfully.');
    }

    public function show(int $id)
    {
        $groups = Group::findOrFail($id);
        return $groups;
    }

    public function edit(int $id): View
    {
        $group = $this->show($id);
        $categories=Category::all();
        return view('basic.group.create' , compact('categories','group'));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $group = $this->show($id);
        $group->title = $request->title;
        $group->comment = $request->comment;
        $group->is_active = $request->is_active;
        $group->order = $request->order;
        $group->category_id = $request->category;

        $validated = $request->validate([
            'title' => 'bail|required',
            'category' => 'required',
            'is_active'=>'boolean',
            'order'=>'integer',
        ]);
        $group->save();

        return redirect()->route('groups.index')->with('success', 'Group updated successfully.');
    }

    public function destroy(int $id): RedirectResponse
    {
        $group = $this->show($id);
        $group->delete();
        return redirect()->route('groups.index')->with('success', 'Group deleted successfully.');
    }
}
