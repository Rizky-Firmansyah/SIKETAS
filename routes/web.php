<?php

use App\Http\Controllers\KelompokTani\PanenAnggotaControllers;
use App\Http\Controllers\KelompokTani\TanggalPanenAnggotaControllers;
use App\Http\Controllers\SuperAdmin\PanenKelompokControllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelompokTani\DashboardPetaniControllers;
use App\Http\Controllers\SuperAdmin\LoginControllers;
use App\Http\Controllers\SuperAdmin\PemetaanControllers;
use App\Http\Controllers\SuperAdmin\TanggalPanenControllers;
use App\Http\Controllers\SuperAdmin\AdminControllers;
use App\Http\Controllers\SuperAdmin\AnggotaControllers;
use App\Http\Controllers\SuperAdmin\KelompokControllers;
use App\Http\Controllers\SuperAdmin\PetaniControllers;
use App\Http\Controllers\SuperAdmin\RoleControllers;
use App\Http\Controllers\SuperAdmin\UserControllers;
use App\Http\Controllers\UmumControllers;

// Umum
Route::get('/', [UmumControllers::class, 'Beranda']);
Route::get('/pemetaan', [UmumControllers::class, 'Pemetaan']);



Route::middleware(['web', 'guest'])->group(function () {
    //Tampilan Login
    Route::get('/login', [UmumControllers::class, 'login'])->name('login');
    Route::post('/login', [LoginControllers::class, 'authLogin']);
    Route::get('/home', function () {
        return redirect('/login');
    });
});




/**
 * Code Dibawah Ini Untuk Rute Super Admin
 */
Route::middleware(['auth', 'check.user:1'])->group(function () {

    // Admin
    Route::get('/dashboard', [AdminControllers::class, 'Dashboard']);

    // Data Role
    Route::get('/data-role', [RoleControllers::class, 'index']);
    Route::get('/data-role/create', [RoleControllers::class, 'create']);
    Route::post('/data-role/createData', [RoleControllers::class, 'createData']);

    // Data User
    Route::get('/data-user', [UserControllers::class, 'index']);
    Route::get('/data-user/create', [UserControllers::class, 'create']);
    Route::post('/data-user/createData', [UserControllers::class, 'createData']);

    // Data Anggota
    Route::get('/data-anggota', [AnggotaControllers::class, 'index']);
    Route::get('/data-anggota/create', [AnggotaControllers::class, 'create']);
    Route::post('/data-anggota/createData', [AnggotaControllers::class, 'createData']);

    // Data Pemetaan
    Route::get('/data-pemetaan', [PemetaanControllers::class, 'index']);
    Route::get('/data-pemetaan/create', [PemetaanControllers::class, 'create']);
    Route::post('/data-pemetaan/createData', [PemetaanControllers::class, 'createData']);

    // Data Tanggal Panen Anggota
    Route::get('/tanggal-panen', [TanggalPanenControllers::class, 'index']);
    Route::get('/tanggal-panen/create', [TanggalPanenControllers::class, 'create']);
    Route::post('/tanggal-panen/createData', [TanggalPanenControllers::class, 'createData']);

    // Data Panen Anggota
    Route::get('/data-petani/{id_tanggal_panen}', [PetaniControllers::class, 'index']);
    Route::get('/data-petani/create/{id_tanggal_panen}', [PetaniControllers::class, 'create']);
    Route::post('/data-petani/createData/{id_tanggal_panen}', [PetaniControllers::class, 'createData']);
    Route::get('/data-petani/{id_panen_petani}/update', [PetaniControllers::class, 'update']);
    Route::put('/data-petani/{id_panen_petani}/updateData', [PetaniControllers::class, 'updateData']);
    Route::get('/data-petani/{id_panen_petani}/delete', [PetaniControllers::class, 'delete']);

    // Data Panen Kelompok
    Route::get('/data-kelompok', [KelompokControllers::class, 'index']);
    Route::get('/data-kelompok/create', [KelompokControllers::class, 'create']);
    Route::post('/data-kelompok/createData', [KelompokControllers::class, 'createData']);
    // Data Kelompok Panen
    Route::get('/data-kelompok-panen', [PanenKelompokControllers::class, 'index']);
    Route::get('/data-kelompok-panen/create', [PanenKelompokControllers::class, 'create']);
    Route::post('/data-kelompok-panen/createData', [PanenKelompokControllers::class, 'createData']);

    // Untuk Log Out Semua Pengguna
    Route::get('/logout', [LoginControllers::class, 'logout'])->name('logout');
});


/**
 * Code Dibawah Ini Rute Kelompok Tani
 */
Route::middleware(['auth', 'check.user:2-1000'])->group(function () {
    // Dashboard Data Panen Anggota
    Route::get('/dashboard-petani', [DashboardPetaniControllers::class, 'index']);

    // Data Tanggal Panen Anggota
    Route::get('/tanggal-panen-anggota', [TanggalPanenAnggotaControllers::class, 'index']);
    Route::get('/tanggal-panen-anggota/create', [TanggalPanenAnggotaControllers::class, 'create']);
    Route::post('/tanggal-panen-anggota/createData', [TanggalPanenAnggotaControllers::class, 'createData']);

    // Data Panen Anggota
    Route::get('/data-panen-anggota/{id_tanggal_panen}', [PanenAnggotaControllers::class, 'index']);
    Route::get('/data-panen-anggota/create/{id_tanggal_panen}', [PanenAnggotaControllers::class, 'create']);
    Route::post('/data-panen-anggota/createData/{id_tanggal_panen}', [PanenAnggotaControllers::class, 'createData']);
    Route::get('/data-petani/{id_panen_petani}/update', [PanenAnggotaControllers::class, 'update']);
    Route::put('/data-petani/{id_panen_petani}/updateData', [PanenAnggotaControllers::class, 'updateData']);
    Route::get('/data-petani/{id_panen_petani}/delete', [PanenAnggotaControllers::class, 'delete']);



    // Untuk Log Out Semua Pengguna
    Route::get('/logout', [LoginControllers::class, 'logout'])->name('logout');
    Route::get('/home', [LoginControllers::class, 'home']);
});