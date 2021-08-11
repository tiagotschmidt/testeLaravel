<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Validation\Factory;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
      return view('auth.register');
    }//

    public function store(Request $request)
    {
      $this->validate($request,[
        'name' => 'required|max:255',
        'username' => 'required|max:255',
        'email' => 'required|email|max:255',
        'password' => 'required|confirmed',
      ]);

        User::create([
          'name' => $request->name,
          'username' => $request->username,
          'email' => $request->email,
          'password' => Hash::make($request->password),
        ]);

        auth()->attempt($request->only('email','password'));

        return redirect()->route('dashboard');
    }//
}
