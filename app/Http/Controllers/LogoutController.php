<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Validation\Factory;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LogoutController extends Controller
{
    public function store()
    {
      auth()->logout();

      return redirect()->route('home');
    }//
}
