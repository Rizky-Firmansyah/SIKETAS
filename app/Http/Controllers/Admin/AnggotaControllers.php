<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AnggotaModels;
use App\Models\RoleModels;
use Illuminate\Http\Request;

class AnggotaControllers extends Controller
{
    function index()
    {
        $anggota = AnggotaModels::select('tb_anggota.*', 'tb_kelompok.kelompok')
            ->join('tb_kelompok', 'tb_anggota.id_kelompok', '=', 'tb_kelompok.id_kelompok')
            ->get();
        return view("admin.anggota.index", compact('anggota'));
    }
    function create()
    {

        $anggota = RoleModels::all();
        return view("admin.anggota.create", compact('anggota'));
    }

    function createData(Request $request)
    {
        AnggotaModels::create([
            'nama_petani' => $request->input('nama_petani'),
            'id_kelompok' => $request->input('nama_kelompok'),
            'alamat' => $request->input('alamat'),
            'no_hp' => $request->input('no_hp'),
            'umur' => $request->input('umur'),
            'luas_lahan' => $request->input('luas_lahan'),
            'no_sertifikat' => $request->input('no_sertifikat'),
        ]);
        return redirect('/data-anggota');
    }
}
