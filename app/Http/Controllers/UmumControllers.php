<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UmumControllers extends Controller
{
    function Beranda()
    {
        return view("Umum.Beranda");
    }

    function pemetaan()
    {
        return view("Umum.Pemetaan");
    }
    function login()
    {
        return view("Umum.Login");
    }
}
