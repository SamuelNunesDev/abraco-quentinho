<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        if( Auth::check() ) {
            return redirect()->route('admin.index');
        }
        return view('login');
    }
    public function do(Request $request) 
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if( Auth::attempt($credentials) ) {
            return redirect()->route('admin.index');
        }

        return back()->with('error', 'E-mail ou senha inválida.');
    }
    public function logout()
    {
        Auth::logout();

        return redirect()->route('index');
    }
}
