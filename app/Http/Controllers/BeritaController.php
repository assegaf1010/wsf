<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;


class BeritaController extends Controller
{

    public function berita()
    {
        $beritaTerbaru = Berita::latest()->first();
        $beritas = Berita::all();

        return view('berita', compact('beritaTerbaru', 'beritas'));
    }

    public function create()
    {
        return view('Berita.create');
    }

    public function show(Berita $berita)
    {
        return view('beritadet', ['berita' => $berita]);
    }

    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'title' => 'required|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'deskripsi' => 'required',
        ]);
    
        // Default path ke storage Laravel
        try {
            $gambarPath = $request->file('gambar')->store('img/berita', 'public');
        } catch (\Exception $e) {
            // Jika gagal menyimpan, gunakan direktori sementara
            $tempDir = sys_get_temp_dir() . '/img/berita';
            if (!file_exists($tempDir)) {
                mkdir($tempDir, 0777, true);
            }
    
            $gambarPath = $tempDir . '/' . uniqid() . '.' . $request->file('gambar')->getClientOriginalExtension();
            $request->file('gambar')->move($tempDir, basename($gambarPath));
        }
    
        // Simpan data berita ke database
        Berita::create([
            'title' => $request->title,
            'gambar' => $gambarPath, // Path ke gambar
            'deskripsi' => $request->deskripsi,
        ]);
    
        // Redirect dengan pesan sukses
        return redirect()->route('pengumumanadmin')->with('success', 'Berita berhasil ditambahkan!');
    }
    
}
