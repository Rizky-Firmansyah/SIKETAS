<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserControllers extends Controller
{
    function index()
    {
        return view("admin.pengguna.index");
    }
}
