<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use App\Models\Club; 
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class KlubController extends Controller
{
    public function dashboard()
    {
        return view('klub.dashboard');
    }

    public function register(Request $request)
    {


        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'nama_club' => 'required|string|max:255', 
            'logo' => 'required|file|mimes:jpeg,png,jpg|max:2048',
        ]);

        DB::transaction(function () use ($request) {
            // Simpan data pengguna
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'klub',
            ]);


            $logoPath = $request->file('logo') 
            ? $request->file('logo')->store('logos', 'public') 
            : null;
            // Simpan data klub
            Club::create([
                'user_id' => $user->id,
                'nama_club' => $request->nama_club,
                'alamat' => $request->alamat,
                'email' => $request->email,
                'tanggal_berdiri' => $request->tanggal_berdiri,
                'logo' => $logoPath,
            ]);
        });


        return redirect()->route('login')->with('success', 'Registrasi berhasil. Silakan login.');
    }
}
