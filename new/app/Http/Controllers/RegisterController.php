<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255', 'unique:users,name',
            'email' => ['required', 'email:dns', 'min:3', 'max:255', 'unique:users,email'],
            'password' => 'required|min:5|max:255'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        // $request->session()->flash('success', 'Registration successful');
        User::create($validatedData);
        return redirect('/login')->with('success', 'Registration successful');
    }
}
