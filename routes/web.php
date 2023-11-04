<?php

use App\Http\Controllers\LoginControllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminControllers;
use App\Http\Controllers\AnggotaControllers;
use App\Http\Controllers\KelompokControllers;
use App\Http\Controllers\PetaniControllers;
use App\Http\Controllers\RoleControllers;
use App\Http\Controllers\UmumControllers;
use App\Http\Controllers\UserControllers;

// Umum
Route::get('/', [UmumControllers::class, 'Beranda']);
Route::get('/pemetaan', [UmumControllers::class, 'Pemetaan']);



Route::middleware(['guest'])->group(function () {
    //Tampilan Login
    Route::get('/login', [UmumControllers::class, 'Login'])->name('login');
    Route::post('/login', [LoginControllers::class, 'authLogin']);
});


Route::middleware(['auth'])->group(function () {
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

    // Data Petani
    Route::get('/data-petani', [PetaniControllers::class, 'index']);

    // Data Kelompok
    Route::get('/data-kelompok', [KelompokControllers::class, 'index']);


    // Untuk Log Out Semua Pengguna
    Route::get('/logout', [LoginControllers::class, 'logout'])->name('logout');
});