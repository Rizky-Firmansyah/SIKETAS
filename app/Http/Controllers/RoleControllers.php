<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleControllers extends Controller
{
    function index()
    {
        return view("admin.role.index");
    }
}
