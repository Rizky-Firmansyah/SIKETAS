<?php

use App\Http\Controllers\AdminControllers;
use App\Http\Controllers\AnggotaControllers;
use App\Http\Controllers\UmumControllers;
use App\Http\Controllers\UserControllers;
use Illuminate\Support\Facades\Route;

// Umum
Route::get('/', [UmumControllers::class, 'Beranda']);
Route::get('/pemetaan', [UmumControllers::class, 'Pemetaan']);
Route::get('/login', [UmumControllers::class, 'Login']);

// Admin
Route::get('/dashboard', [AdminControllers::class, 'Dashboard']);

// Data User
Route::get('/data-user', [UserControllers::class, 'index']);

// Data Anggota
Route::get('/data-anggota', [AnggotaControllers::class, 'index']);