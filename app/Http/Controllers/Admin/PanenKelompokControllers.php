<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PanenPetaniModels;
use App\Models\RoleModels;
use App\Models\TanggalPanenModels;

class PanenKelompokControllers extends Controller
{
    function index()
    {
        return view('admin.ketelusuran.panenkelompok.index');
    }

    function create()
    {
        $kelompok = RoleModels::all();
        $tanggal_panen = TanggalPanenModels::orderBy('tanggal', 'desc')->get();
        return view('admin.ketelusuran.panenkelompok.create', compact('kelompok', 'tanggal_panen'));
    }

    function createData(Request $request)
    {
        dd($request->all());
        PanenPetaniModels::create([
            'id_kelompok' => $request->input('nama_kelompok'),
            ' 9' => $request->input('tanggal_panen'),
            'total_tonase' => $request->input('total_tonase'),
            'total_janjang' => $request->input('total_janjang'),
            'tanggal_keberangkatan' => $request->input('tanggal_keberangkatan'),
        ]);
    }

}
