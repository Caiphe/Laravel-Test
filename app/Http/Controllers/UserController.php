<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

class UserController extends Controller
{
    public function login ()
    {
        return view('login');
    }

    public function authenticate (LoginRequest $request)
    {
        $user = $request->validated();
        auth()->attempt($request->only('email', 'password'));
        return redirect('/products');
    }

    public function newUser ()
    {
        return view('register');
    }
    
    public function register (Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        auth()->attempt($request->only('email', 'password'));
        return redirect('/products');

    }
}
