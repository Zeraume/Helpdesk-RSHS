<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnitKerjaController extends Controller
{
    public function berandaUnitKerja()
    {
        return view('UnitKerja.dashboardUnitKerja');
    }

    public function navbar()
    {
        return view('UnitKerja.navbarUnitKerja');
    }
}
