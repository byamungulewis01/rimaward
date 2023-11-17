<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    //index
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }
    //store
    public function store(Request $request)
    {
        $fields = $request->validate([
            'title' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg,svg,gif|max:100000',
            'description' => 'required',
        ]);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/', $filename);
            $fields['image'] = $filename;
        }
        Post::create($fields);
        return to_route('admin.posts.index')->with('success', 'Post Added Successfully');
    }
    //update
    public function update(Request $request, $id)
    {
        $fields = $request->validate([
            'title' => 'required',
            'image' => 'mimes:png,jpg,jpeg,svg,gif|max:100000',
            'description' => 'required',
        ]);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/', $filename);
            $fields['image'] = $filename;
        }
        Post::find($id)->update($fields);
        return to_route('admin.posts.index')->with('success', 'Post Updated Successfully');
    }
    //delete
    public function destroy($id)
    {
        Post::find($id)->delete();
        return to_route('admin.posts.index')->with('success', 'Post Deleted Successfully');
    }
}
