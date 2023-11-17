<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    //index
    public function index()
    {
        $categories = Category::all();
        $locations = Location::all();
        return view('admin.categories.index', compact('categories', 'locations'));
    }
    //store name
    public function store(Request $request)
    {
        $request->validate(['name' => 'required','unique:categories,name',]);
        Category::create($request->all());
        return to_route('admin.categories.index')->with('success', 'Category Added Successfully');
    }
    //update name
    public function update(Request $request, $id)
    {
        $request->validate(['name' => 'required','unique:categories,name,'.$id,]);
        Category::find($id)->update($request->all());
        return to_route('admin.categories.index')->with('success', 'Category Updated Successfully');
    }
    //delete name
    public function destroy($id)
    {
        Category::find($id)->delete();
        return to_route('admin.categories.index')->with('success', 'Category Deleted Successfully');
    }
    //store location
    public function locationStore(Request $request)
    {
        $request->validate(['name' => 'required','unique:locations,name',]);
        Location::create($request->all());
        return to_route('admin.categories.index')->with('success', 'Location Added Successfully');
    }
    //update location
    public function locationUpdate(Request $request, $id)
    {
        $request->validate(['name' => 'required','unique:locations,name,'.$id,]);
        Location::find($id)->update($request->all());
        return to_route('admin.categories.index')->with('success', 'Location Updated Successfully');
    }
    //delete location
    public function locationDestroy($id)
    {
        Location::find($id)->delete();
        return to_route('admin.categories.index')->with('success', 'Location Deleted Successfully');
    }
}
