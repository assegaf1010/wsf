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
        return view('Beritadet', ['berita' => $berita]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|max:255',
            'gambar'=>'required|image|mimes:jpeg,png,jpg|max:2048',
            'deskripsi'=>'required',
        ]);

        $gambarPath = $request->file('gambar')->store('img/berita','public');

        Berita::create([
            'title'=>$request->title,
            'gambar'=>$gambarPath,
            'deskripsi'=>$request->deskripsi,
        ]);

        return redirect()->route('pengumumanadmin')->with('success', 'Berita berhasil ditambahkan!');
    }
}
