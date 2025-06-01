<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HumasController extends Controller
{
    public function daftarPelaporan()
    {
        return view('humas.daftarPelaporan');
    }

    public function dataReferensi()
    {
        return view('humas.dataReferensi');
    }

    public function direksi()
    {
        return view('humas.direksi');
    }

    public function unitKerja()
    {
        return view('humas.unitKerja');
    }
}
