<?php

namespace App\Http\Controllers;

use App\Models\Atlet;
use App\Models\Club;
use Illuminate\Http\Request;

class AtletController extends Controller
{
    public function create()
    {
        // Mendapatkan semua klub untuk dropdown
        $clubs = Club::all();
        return view('Atlet.create', compact('clubs'));
    }

    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'nama_atlet' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'club_id' => 'required|exists:clubs,id',
        ]);

        // Menyimpan data atlet
        Atlet::create($request->all());

        return redirect()->route('Atlet.create')->with('success', 'Atlet berhasil ditambahkan!');
    }
}

