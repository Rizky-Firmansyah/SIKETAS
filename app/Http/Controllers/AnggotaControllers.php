<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnggotaControllers extends Controller
{
    function index()
    {
        return view("admin.anggota.index");
    }
}
