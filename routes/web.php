<?php

use App\Http\Controllers\AdminControllers;
use App\Http\Controllers\AnggotaControllers;
use App\Http\Controllers\KelompokControllers;
use App\Http\Controllers\PetaniControllers;
use App\Http\Controllers\RoleControllers;
use App\Http\Controllers\UmumControllers;
use App\Http\Controllers\UserControllers;
use Illuminate\Support\Facades\Route;

// Umum
Route::get('/', [UmumControllers::class, 'Beranda']);
Route::get('/pemetaan', [UmumControllers::class, 'Pemetaan']);
Route::get('/login', [UmumControllers::class, 'Login']);

// Admin
Route::get('/dashboard', [AdminControllers::class, 'Dashboard']);

// Data Role
Route::get('/data-role', [RoleControllers::class, 'index']);

// Data User
Route::get('/data-user', [UserControllers::class, 'index']);

// Data Anggota
Route::get('/data-anggota', [AnggotaControllers::class, 'index']);

// Data Petani
Route::get('/data-petani', [PetaniControllers::class, 'index']);

// Data Kelompok
Route::get('/data-kelompok', [KelompokControllers::class, 'index']);