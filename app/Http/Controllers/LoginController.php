<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Validation\Factory;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function index(){
      return view('auth.login');
    }//

    public function store(Request $request)
    {
      $this->validate($request,[
        'email' => 'required|email',
        'password' => 'required',
      ]);

      if(!auth()->attempt($request->only('email','password'))){
        return back()->with('status','Login Inválido.');
      }

      return redirect()->route('dashboard');
    }//
}
