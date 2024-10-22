<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginCek(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            // Redirect jika login berhasil
            return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'err' => 'Email atau password salah.',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
