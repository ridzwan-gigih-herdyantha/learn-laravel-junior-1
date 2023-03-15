<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register',
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' =>['required','max:255','min:3' , 'unique:users'],
            'email' => 'required|email:dns|unique:users|',
            'password' => 'required|min:5|max:255'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // $request->session()->flash('success', 'Registration Successfully! Please Login');

        // return redirect('/login');

        // return redirect('/login')->with('success', 'Registration Successfully! Please Login');
        // dd('berhasil');
        return redirect('/login')->with('success', 'Registration Successfully! Please Login');
        // return $request->all();
    }
}
