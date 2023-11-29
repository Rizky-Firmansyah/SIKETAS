<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KendaraanModels;
use Illuminate\Http\Request;

class KendaraanControllers extends Controller
{
    function index()
    {
        $kendaraan = KendaraanModels::all();
        return view("admin.kendaraan.index", compact('kendaraan'));
    }

    function create()
    {
        return view("admin.kendaraan.create");
    }

    function createData(Request $request)
    {
        KendaraanModels::create([
            'jenis_kendaraan' => $request->input('jenis_kendaraan'),
            'no_kendaraan' => $request->input('no_kendaraan'),
        ]);
        return redirect('/data-kendaraan');
    }
}
