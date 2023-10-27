<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminControllers extends Controller
{
    function dashboard()
    {
        return view("admin.dashboard.index");
    }
}
