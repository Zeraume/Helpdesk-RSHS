<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\HumasController;
use App\Http\Controllers\UnitKerjaController;
use App\Http\Controllers\AdminController;

Route::get('/', fn() => redirect()->route('humas.daftarPelaporan'));

Route::get('/dashboard-pasien', [PasienController::class, 'dashboard'])
     ->name('pasien.dashboard');

Route::get('/buat-laporan', [PasienController::class, 'createLaporan'])
     ->name('pasien.buatLaporan');

Route::get('/lacak-tiket', [PasienController::class, 'lacakTiket'])
     ->name('pasien.lacakTiket');

Route::get('/ssd', [PasienController::class, 'ssd'])
     ->name('pasien.ssd');

Route::get('/daftar-pelaporan', [PasienController::class, 'listPelaporan'])
     ->name('humas.daftar-pelaporan');

Route::prefix('humas')->name('humas.')->group(function () {
    Route::get('/daftar-pelaporan', [HumasController::class, 'daftarPelaporan'])->name('daftarPelaporan');
    Route::get('/data-referensi', [HumasController::class, 'dataReferensi'])->name('dataReferensi');
    Route::get('/direksi', [HumasController::class, 'direksi'])->name('direksi');
    Route::get('/unit-kerja', [HumasController::class, 'unitKerja'])->name('unitKerja');
});

Route::get('/internal-api/get-humas-navbar', function () {
    return view('Humas.navbarHumas')->render();
})->name('internal.humasNavbar');

Route::prefix('unit-kerja')->name('unit-kerja.')->group(function () {
    Route::get('/dashboard-unit-kerja', [UnitKerjaController::class, 'berandaUnitKerja'])->name('berandaUnitKerja');
    Route::get('/navbar-content', [UnitKerjaController::class, 'navbar'])->name('navbarContent');
});

Route::get('/admin/dashboard', [AdminController::class, 'berandaAdmin'])->name('admin.dashboard');
