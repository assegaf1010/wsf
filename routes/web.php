<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Berita;
use App\Models\Kegiatan;
use App\Http\Middleware\CheckRole;
use App\Http\Controllers;



// Rute Controll
Route::get('/', Controllers\PageController::class);

// Rute Detail

Route::get('/beritadet/{berita:slug}', [Controllers\BeritaController::class, 'show'])->name('Berita.show');
Route::get('/kegiatandet/{kegiatan:slug}', [Controllers\KegiatanController::class, 'show'])->name('Kegiatan.show');

// Rute Page
Route::get('/berita', [Controllers\PageController::class, 'berita'])->name('berita');
Route::get('/beritadet', [Controllers\PageController::class, 'beritadet'])->name('beritadet');
Route::get('/tentang', [Controllers\PageController::class, 'tentang'])->name('tentang');
Route::get('/club', [Controllers\PageController::class, 'club'])->name('club');


//Rute Kegiatan
Route::get('/kegiatan', [Controllers\KegiatanController::class, 'kegiatan'])->name('kegiatan');

//Rute Berita
Route::get('/berita', [Controllers\BeritaController::class, 'berita'])->name('berita');


// Rute User Klub
Route::group(['middleware' => ['auth'],['redirect.role:klub']], function () {
    Route::get('/Klub/dashboard', [Controllers\LoginController::class, 'dashboard'])->name('Klub.dashboard');
    Route::get('/profileklub', [Controllers\KlubController::class, 'profileklub'])->name('profileklub');
    Route::get('/atletklub', [Controllers\KlubController::class, 'atletklub'])->name('atletklub');
    Route::get('/kegiatanklub', [Controllers\KlubController::class, 'kegiatanklub'])->name('kegiatanklub');
    Route::get('/pengumumanklub', [Controllers\KlubController::class, 'pengumumanklub'])->name('pengumumanklub');
    Route::get('/Atlet/create', [Controllers\AtletController::class, 'create'])->name('Atlet.create');
    Route::post('/atlet', [Controllers\AtletController::class, 'store'])->name('atlet.store');

    Route::get('/pengumumanklubdet', [Controllers\KlubController::class, 'pengumumanklubdet'])->name('pengumumanklubdet');
    Route::get('/pengumumanklubdet/{berita:slug}', [Controllers\KlubController::class, 'pengumumanklubdet'])->name('Klub.pengumumanklubdet');

    Route::get('/kegiatanklubdet/{kegiatan:slug}', [COntrollers\KlubController::class, 'kegiatanklubdet'])->name('Kegiatan.kegiatanklubdet');

});

// Rute Admin

Route::group(['middleware' => ['auth'],['redirect.role:admin']], function () {
    Route::get('/Admin/dashboard', [Controllers\AdminController::class, 'dashboard'])->name('Admin.dashboard');
    Route::get('/profileadmin', [Controllers\AdminController::class, 'profileadmin'])->name('profileadmin');
    Route::get('/klubadmin', [Controllers\AdminController::class, 'klubadmin'])->name('klubadmin');
    Route::get('/atletadmin', [Controllers\AdminController::class, 'atletadmin'])->name('atletadmin');
    Route::get('/kegiatanadmin', [Controllers\AdminController::class, 'kegiatanadmin'])->name('kegiatanadmin');
    Route::get('/pengumumanadmin', [Controllers\AdminController::class, 'pengumumanadmin'])->name('pengumumanadmin');

    Route::get('/pengumumanadmindet', [Controllers\AdminController::class, 'pengumumanadmindet'])->name('pengumumanadmindet');
    Route::get('/pengumumanadmindet/{berita:slug}', [Controllers\AdminController::class, 'pengumumanadmindet'])->name('Admin.pengumumanadmindet');

    Route::delete('/pengumuman/{berita}', [Controllers\AdminController::class, 'destroy'])->name('berita.destroy');
    Route::get('/pengumumanadmindet/{berita:slug}/edit', [Controllers\AdminController::class, 'edit'])->name('berita.edit');
    Route::put('/berita/{berita:slug}', [Controllers\AdminController::class, 'update'])->name('berita.update');

    Route::get('/kegiatanadmindet/{kegiatan:slug}', [COntrollers\AdminController::class, 'kegiatanadmindet'])->name('Kegiatan.kegiatanadmindet');
    Route::get('/berita/create', [Controllers\BeritaController::class, 'create'])->name('berita.create');
    Route::post('/berita', [Controllers\BeritaController::class, 'store'])->name('berita.store');

    Route::get('/kegiatan/create', [Controllers\KegiatanController::class, 'create'])->name('kegiatan.create');
    Route::post('/kegiatan/store', [Controllers\KegiatanController::class, 'store'])->name('kegiatan.store');

    Route::get('/createkegiatan', [Controllers\PageController::class, 'createkegiatan'])->name('createkegiatan');
    Route::get('/createberita', [Controllers\PageController::class, 'createberita'])->name('createberita');


    Route::post('/logout', function () {
        Auth::logout();
        return redirect('/'); // Setelah logout, arahkan ke halaman utama atau halaman login
    })->name('logout');

    });




// Pengumuman/Berita Admin




// Kegiatan Admin





Route::get('/register', function () {
    return view('register');
})->middleware(CheckRole::class.':admin');;

Route::get('/visi', function () {
    return view('visi');
});

Route::get('/struktur', function () {
    return view('struktur');
});

Route::get('/informasi', function () {
    return view('informasi');
});

Route::get('/kegiatandet', function () {
    return view('kegiatandet');
});


# Login

Route::get('/loginpage', [Controllers\PageController::class,'login'])->name('login.login');
Route::get('/registerpage',[Controllers\PageController::class,'register'])->name('login.register');

Route::get('/login', [Controllers\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [Controllers\LoginController::class, 'login']);

Route::get('/register/klub', [Controllers\KlubController::class, 'showRegistrationForm'])->name('klub.register');
Route::post('/register/klub', [Controllers\KlubController::class, 'register']);



// Route::middleware(['auth', 'role:klub'])->group(function () {
//     Route::get('/klub/dashboard', [Controllers\KlubController::class, 'dashboard'])->name('klub.dashboard');
// });


// Route::get('/Admin/dashboardadmin', [Controllers\AdminController::class, 'dashboard'])->name('admin.dashboard');




Route::get('/detailatlet', function () {
    return view('/detailatlet');
});



Route::get('/klubadmindet', function () {
    return view('/Klub/klubadmindet');
});

Route::get('/atletadmindet', function () {
    return view('/Atlet/atletadmindet');
});

