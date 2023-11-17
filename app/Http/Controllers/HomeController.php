<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->get();
        return view('home.index',compact('posts'));
    }
    // show
    public function show($id)
    {
        return view('home.show');
    }
    public function about()
    {
        return view('home.about');
    }
    public function contact()
    {
        return view('home.contact');
    }
    public function leadership()
    {
        $leaders = Team::all();
        return view('home.leadership',compact('leaders'));
    }



}
