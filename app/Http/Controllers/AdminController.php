<?php

namespace App\Http\Controllers;
use App\Models\Berita;
use App\Models\Kegiatan;
use App\Models\Club;
use App\Models\Atlet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{

    public function dashboard()
    {
        $beritas = Berita::all();
        $kegiatans = Kegiatan::all();
        $role = Auth::user()->role;

        return view('Admin.dashboardadmin', compact('beritas', 'kegiatans','role'));
    }

    public function profileadmin()
    {
        return view ('admin.profileadmin');
    }

    public function klubadmin()
    {
        return view ('admin.klubadmin');
    }

    public function atletadmin()
    {

        $atlets = Atlet::all();
        return view ('admin.atletadmin', compact('atlets'));
    }





    public function kegiatanadmin()
    {

        $kegiatans = Kegiatan::all();

        return view ('admin.kegiatanadmin', compact('kegiatans'));
    }

    public function kegiatanadmindet(Kegiatan $kegiatan)
    {
        return view('kegiatan.kegiatanadmindet', ['kegiatan' => $kegiatan]);
    }





    public function pengumumanadmin()
    {
        $beritas = Berita::all();

        return view ('admin.pengumumanadmin', compact('beritas'));
    }


    public function pengumumanadmindet(Berita $berita)
    {
        return view('admin.pengumumanadmindet', ['berita' => $berita]);
    }

    public function edit(Berita $berita)
    {
        return view('Berita.edit', compact('berita'));
    }

    public function update(Request $request, Berita $berita)
    {
        $request->validate([
            'title' => 'required|max:255',
            'gambar' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'deskripsi' => 'required',
        ]);

        // Update data berita
        $berita->title = $request->title;
        $berita->deskripsi = $request->deskripsi;

        // Update gambar jika ada file baru diupload
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('public/berita');
            $berita->gambar = basename($path);
        }

        $berita->save();

        return redirect()->route('Admin.pengumumanadmindet', ['berita' => $berita->slug])
        ->with('success', 'Berita berhasil diperbarui.');
    

    }

    public function detail($berita)
    {
        // Misalnya, ambil data berita berdasarkan ID atau slug
        $berita = Berita::findOrFail($berita);

        return view('admin.pengumumandet', compact('berita'));
    }

    public function destroy(Berita $berita)
    {
        $berita->delete();

        return redirect()
            ->route('pengumumanadmin') // Ganti dengan rute yang sesuai untuk daftar pengumuman
            ->with('success', 'Pengumuman berhasil dihapus.');
    }

    // Autentikasi

}
