<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    // index
    public function index()
    {
        return 'index here';
    }
    //login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|min:8|max:255',
        ]);

        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            return redirect()->route('index');
        } else {
            return redirect()->back()->with('error', 'Invalid login details');
        }
    }
    // register
    public function register(Request $request)
    {

        $request->validate([
            'register' => 'required',
            'name' => 'required|min:10|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|max:255',
            'password_confirmation' => 'required|min:6|max:255|same:password',
        ]);
        $request->merge(['password' => bcrypt($request->password)]);
        Client::create($request->all());
        return to_route('home');
    }
}
