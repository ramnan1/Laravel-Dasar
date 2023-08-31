<?php

namespace App\Http\Controllers;


use App\Mail\TestEmail;

use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
  public function index()
  {
    return view('register.index', [
      "title" => "Register",
      "active" => "register"
    ]);
  }

  public function store(Request $request)
  {
    $validateddata = $request->validate([
      'name' => 'required|max:255',
      'username' => ['required', 'min:3', 'max:255', 'unique:users'],
      'email' => 'required|email:dns|unique:users',
      'password' => 'required|min:5|max:255'
    ]);

    $validateddata['password'] = Hash::make($validateddata['password']);
    
    

    User::create($validateddata);

    Mail::to($request->email)->send(new TestEmail());

    // $request->session()->flash('succes', 'Registration Succesfull! Please Login');

    return redirect('/login')->with('success', 'Registration Succesfull! Please Login');
  }
}
