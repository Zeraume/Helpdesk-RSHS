<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;

Route::get('/', fn() => redirect()->route('pasien.dashboard'));

Route::get('/dashboard-pasien', [PasienController::class, 'dashboard'])
     ->name('pasien.dashboard');

Route::get('/buat-laporan', [PasienController::class, 'createLaporan'])
     ->name('pasien.buatLaporan');

Route::get('/lacak-tiket', [PasienController::class, 'lacakTiket'])
     ->name('pasien.lacakTiket');

Route::get('/ssd', [PasienController::class, 'ssd'])
     ->name('pasien.ssd');

