<?php

namespace App\Http\Controllers;

use App\Models\RoleModels;
use App\Models\UserModels;
use Illuminate\Http\Request;

class UserControllers extends Controller
{
    function index()
    {
        $user = UserModels::all();
        return view('admin.pengguna.index', compact('user'));
    }
    function create(Request $request)
    {
        $kelompok = RoleModels::all();
        return view('admin.pengguna.create', compact('kelompok'));
    }

    function createData(Request $request)
    {
        $passwordHash = bcrypt($request->input('password'));

        // Buat record user menggunakan Eloquent
        UserModels::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $passwordHash,
            'role' => $request->input('role'),
        ]);
        return redirect('/data-user');
    }
}
