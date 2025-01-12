<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        // Mengecek apakah pengguna terautentikasi dan role-nya sesuai dengan yang diminta
        if (Auth::check() && Auth::user()->role !== $role) {
            return redirect('/login')->with('error', 'Akses ditolak, role tidak sesuai');
        }

        return $next($request);
    }
}

