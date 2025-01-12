<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;

class KegiatanController extends Controller
{

    public function kegiatan()
    {
        $kegiatans = Kegiatan::all();

        return view('kegiatan.kegiatan', compact('kegiatans'));
    }


    public function create()
    {
        return view('kegiatan.create');
    }

    public function show(Kegiatan $kegiatan)
    {
        return view('kegiatandet', ['kegiatan' => $kegiatan]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'tempat' => 'required|max:255',
            'jadwal' => 'required|date',
            'deskripsi' => 'required',
            'biaya_pendaftaran' => 'required|numeric|min:0',
        ]);

        Kegiatan::create([
            'title' => $request->title,
            'tempat' => $request->tempat,
            'jadwal' => $request->jadwal,
            'deskripsi' => $request->deskripsi,
            'biaya_pendaftaran' => $request->biaya_pendaftaran,
        ]);

        return redirect()->route('kegiatanadmin')->with('success', 'Kegiatan berhasil ditambahkan!');
}
}