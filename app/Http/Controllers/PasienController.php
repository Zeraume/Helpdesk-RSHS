<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasienController extends Controller
{
    // Tampilkan dashboard pasien
    public function dashboard()
    {
        return view('dashboardPasien');
    }

    // Form buat laporan
    public function createLaporan()
    {
        return view('buatLaporan');
    }

    // Halaman lacak tiket
    public function lacakTiket()
    {
        return view('lacakTiket');
    }

    // Soalan sering ditanya (SSD)
    public function ssd()
    {
        return view('ssd');
    }
}
