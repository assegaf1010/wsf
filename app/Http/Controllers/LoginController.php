<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login.loginklub'); // Pastikan Anda memiliki view auth/login.blade.php
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required|in:admin,klub',
        ]);
    
        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();
            
            // Menyimpan role ke session
            session(['role' => $request->role]);
    
            return redirect()->intended('/dashboard');
        }
    
        return back()->withErrors(['email' => 'Email atau password salah.']);
    }
    
    
}

