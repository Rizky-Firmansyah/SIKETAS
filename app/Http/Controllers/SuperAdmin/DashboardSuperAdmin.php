<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardSuperAdmin extends Controller
{
    function index()
    {
        return view("superadmin.dashboard.index");
    }
}