<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelompokControllers extends Controller
{
    function index()
    {
        return view("admin.ketelusuran.kelompok.index");
    }
}

