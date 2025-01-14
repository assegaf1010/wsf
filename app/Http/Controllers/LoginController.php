<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('Login.loginklub'); // Pastikan Anda memiliki view login.loginklub.blade.php
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required|in:admin,klub',
        ]);

        // Coba autentikasi user
        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();

            // Periksa apakah role cocok
            if ($user->role !== $request->role) {
                Auth::logout(); // Logout jika role tidak sesuai
                return back()->withErrors(['role' => 'Role tidak sesuai dengan akun Anda.']);
            }

            // Redirect sesuai role
            if ($user->role === 'admin') {
                return redirect()->route('Admin.dashboardadmin'); // Redirect ke dashboard admin
            } elseif ($user->role === 'klub') {
                return redirect()->route('Klub.dashboard'); // Redirect ke dashboard klub
            }
        }

        // Jika autentikasi gagal
        return back()->withErrors(['email' => 'Email atau password salah.']);
    }
}
