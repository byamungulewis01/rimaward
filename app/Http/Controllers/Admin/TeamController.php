<?php

namespace App\Http\Controllers\Admin;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    //index
    public function index()
    {
        $posts = Team::all();
        return view('admin.team.index', compact('posts'));
    }
    //store
    public function store(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required',
            'post' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg,svg,gif|max:100000',
        ]);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/', $filename);
            $fields['image'] = $filename;
        }
        Team::create($fields);
        return to_route('admin.team.index')->with('success', 'Member Added Successfully');
    }
    //update
    public function update(Request $request, $id)
    {
        $fields = $request->validate([
            'name' => 'required',
            'post' => 'required',
            'image' => 'mimes:png,jpg,jpeg,svg,gif|max:100000',
        ]);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/', $filename);
            $fields['image'] = $filename;
        }
        Team::find($id)->update($fields);
        return to_route('admin.team.index')->with('success', 'Member Updated Successfully');
    }
    //delete
    public function destroy($id)
    {
        Team::find($id)->delete();
        return to_route('admin.team.index')->with('success', 'Member Deleted Successfully');
    }

}
