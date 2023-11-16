<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\RoleModels;
use Illuminate\Http\Request;

class RoleControllers extends Controller
{
    function index()
    {
        $role = RoleModels::all();
        return view('admin.role.index', compact('role'));
    }

    function create()
    {
        return view('admin.role.create');
    }
    function createData(Request $request)
    {
        RoleModels::create([
            'kelompok' => $request->input('kelompok'),
        ]);
        return redirect('/data-role');
    }
}
