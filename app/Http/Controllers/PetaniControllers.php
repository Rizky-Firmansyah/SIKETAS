<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetaniControllers extends Controller
{
    function index()
    {
        return view("admin.ketelusuran.petani.index");
    }
}
