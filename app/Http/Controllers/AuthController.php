<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function storeRegister(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|string',
            'password' => 'required|string|confirmed'
        ]);
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password'])
        ]);


        Auth::attempt($request->only(['email', 'password']));

        return redirect('/');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function storeLogin(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required|email|string',
            'password' => 'required|string'
        ]);

        Auth::attempt($request->only(['email', 'password']));

        return redirect('/');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
    public function asosiy()
    {
        return view('layouts.index');
    }
}
