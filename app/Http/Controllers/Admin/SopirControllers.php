<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SopirModels;
use Illuminate\Http\Request;

class SopirControllers extends Controller
{
    function index()
    {
        $sopir = SopirModels::all();
        return view("admin.sopir.index", compact('sopir'));
    }

    function create()
    {
        return view("admin.sopir.create");
    }

    function createData(Request $request)
    {
        SopirModels::create([
            'nama_sopir' => $request->input('nama_sopir')
        ]);
        return redirect('/data-sopir');
    }
}
