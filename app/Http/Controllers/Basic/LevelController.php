<?php

namespace App\Http\Controllers\Basic;

use App\Http\Controllers\Controller;
use App\Models\BasicInfo\Group;
use App\Models\BasicInfo\Level;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LevelController extends Controller
{
    public function index()
    {
        $levels= Level::all();
        return view('basic.level.index',compact('levels'));
    }

    public function create()
    {
        $groups=Group::all();
        return view('basic.level.create' , compact('groups'));
    }

    public function store(Request $request): RedirectResponse
    {
        $level = new Level();
        $level->title = $request->title;
        $level->comment = $request->comment;
        $level->is_active = $request->is_active;
        $level->is_free = $request->is_free;
        $level->order = $request->order;
        $level->group_id = $request->group;

        $validated = $request->validate([
            'title' => 'bail|required',
            'group' => 'required',
            'is_active'=>'boolean',
            'is_free'=>'boolean',
            'order'=>'integer',
        ]);
        $level->save();

        return redirect()->route('levels.index')->with('success', 'Level created successfully.');
    }

    public function show(int $id)
    {
        $levels = Level::findOrFail($id);
        return $levels;
    }

    public function edit(int $id): View
    {
        $level = $this->show($id);
        $groups=Group::all();
        return view('basic.level.create' , compact('groups','level'));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $level = $this->show($id);
        $level->title = $request->title;
        $level->comment = $request->comment;
        $level->is_active = $request->is_active;
        $level->is_free = $request->is_free;
        $level->order = $request->order;
        $level->group_id = $request->group;

        $validated = $request->validate([
            'title' => 'bail|required',
            'group' => 'required',
            'is_active'=>'boolean',
            'is_free'=>'boolean',
            'order'=>'integer',
        ]);
        $level->save();

        return redirect()->route('levels.index')->with('success', 'Level updated successfully.');
    }

    public function destroy(int $id): RedirectResponse
    {
        $group = $this->show($id);
        $group->delete();
        return redirect()->route('levels.index')->with('success', 'Level deleted successfully.');
    }
}
