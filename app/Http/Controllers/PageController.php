<?php

namespace App\Http\Controllers;
use App\Models\Berita;
use App\Models\Kegiatan;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __invoke()
    {
        $beritas = Berita::all();
        $kegiatans = Kegiatan::all();

        return view('go', compact('beritas','kegiatans'));
    }

    public function tentang()
    {
        return view('tentang');
    }
    public function berita()
    {
        return view('berita');
    }
    public function kegiatan()
    {
        return view('Kegiatan.kegiatan');
    }
    public function club()
    {
        return view('club');
    }

    public function login()
    {
        return view('login.loginklub');
    }

    public function register()
    {
        return view('login.register');
    }

    public function createberita()
    {
        return view('berita/create');
    }
    public function createkegiatan()
    {
        return view('kegiatan/create');
    }


    public function kegiatandet()
    {

        $kegiatans = Kegiatan::all();

        return view('kegiatan.kegiatandet');
    }
}




