<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;

class AdminControllers extends Controller
{
    function dashboard()
    {
        return view("admin.dashboard.index");
    }
}
