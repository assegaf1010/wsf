<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use App\Models\Club; 
use App\Models\Atlet; 
use App\Models\Kegiatan; 
use App\Models\Berita; 
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class KlubController extends Controller
{


    public function dashboard()
    {
        $klub = Auth::user();
        $users = User::all();
        $clubs = Club::all();
        $beritas = Berita::all();
        $kegiatans = Kegiatan::all();
        
        return view('Klub.dashboard', compact('klub','clubs','users','beritas','kegiatans'));
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
            ? $request->file('logo')->store('img/logo','public') 
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

    public function profileklub()
    {
        return view ('Klub.profileklub');
    }
    public function atletklub()
    {
        $atlets = Atlet::all();

        return view ('Klub.atletklub',compact('atlets',));
    }
    public function kegiatanklub()
    {
        $kegiatans = Kegiatan::all();
        return view ('Klub.kegiatanklub', compact('kegiatans'));
    }
    public function pengumumanklub()
    {
        $beritas = Berita::all();
        return view ('Klub.pengumumanklub', compact('beritas'));
    }

    public function pengumumanklubdet(Berita $berita)
    {
        $beritas = Berita::all();
        return view('Klub.pengumumanklubdet', ['berita' => $berita]);
    }

    public function kegiatanklubdet(Kegiatan $kegiatan)
    {
        return view('Klub.kegiatanklubdet', ['kegiatan' => $kegiatan]);
    }
}
