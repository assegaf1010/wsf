<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kegiatan;
use App\Models\Club;
use App\Models\Atlet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard()
    {
        $clubs = Club::all();
        $countc = Club::count();
        $countk = Kegiatan::count();
        $countb = Berita::count();
        $beritas = Berita::all();
        $kegiatans = Kegiatan::all();
        $role = Auth::user()->role;
        $users = User::where('role', 'klub')->get();
        return view('Admin.dashboardadmin', compact('beritas', 'kegiatans', 'role', 'users', 'clubs', 'countc', 'countk', 'countb'));
    }

    public function profileadmin()
    {
        return view('Admin.profileadmin');
    }

    public function klubadmin()
    {
        $clubs = Club::all();
        return view('Admin.klubadmin', compact('clubs'));
    }

    public function atletadmin()
    {
        $atlets = Atlet::all();
        return view('Admin.atletadmin', compact('atlets'));
    }

    public function kegiatanadmin()
    {
        $kegiatans = Kegiatan::all();
        return view('Admin.kegiatanadmin', compact('kegiatans'));
    }

    public function kegiatanadmindet(Kegiatan $kegiatan)
    {
        return view('Kegiatan.kegiatanadmindet', ['kegiatan' => $kegiatan]);
    }

    public function pengumumanadmin()
    {
        $beritas = Berita::all();
        return view('Admin.pengumumanadmin', compact('beritas'));
    }

    public function pengumumanadmindet(Berita $berita)
    {
        return view('Admin.pengumumanadmindet', ['berita' => $berita]);
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
            // Hapus gambar lama jika ada
            if ($berita->gambar) {
                Storage::disk('public')->delete('img/berita/' . $berita->gambar);
            }
            // Simpan gambar baru
            $gambarPath = $request->file('gambar')->store('img/berita', 'public');
            $berita->gambar = basename($gambarPath);
        }

        $berita->save();

        return redirect()
            ->route('Admin.pengumumanadmindet', ['berita' => $berita->slug])
            ->with('success', 'Berita berhasil diperbarui.');
    }

    public function detail($berita)
    {
        $berita = Berita::findOrFail($berita);
        return view('Admin.pengumumandet', compact('berita'));
    }

    public function destroy(Berita $berita)
    {
        // Hapus gambar dari storage jika ada
        if ($berita->gambar) {
            Storage::disk('public')->delete('img/berita/' . $berita->gambar);
        }

        $berita->delete();

        return redirect()
            ->route('pengumumanadmin')
            ->with('success', 'Pengumuman berhasil dihapus.');
    }
}
