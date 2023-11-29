<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminControllers extends Controller
{
    function dashboard()
    {
        return view("admin.dashboard.index");
    }
}
