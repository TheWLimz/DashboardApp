<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function register(){
         return view('pages.register');
    }

    public function store(Request $request){

     $validated = $request->validate([
        'name' =>'required|max:128',
        'username'=> ['required', 'min:3', 'max:255', 'unique:users'],
        'email' => 'required|email:dns|unique:users',
        'password'=>['required', 'min:6', 'max:15' ]
     ]);

     $validated['password'] = bcrypt($validated['password']);

     User::create($validated);

     $request->session()->flash('success','Registration Successfull!');
     return redirect('/login');

    }
}
