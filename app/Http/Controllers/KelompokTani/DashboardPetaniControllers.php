<?php

namespace App\Http\Controllers\KelompokTani;

use App\Http\Controllers\Controller;

class DashboardPetaniControllers extends Controller
{

    function index()
    {
        return view("kelompoktani.dashboard.index");
    }
}
