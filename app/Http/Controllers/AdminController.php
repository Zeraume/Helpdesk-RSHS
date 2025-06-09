<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function berandaAdmin()
    {
        return view(view: 'Admin.dashboardAdmin');
    }
}
