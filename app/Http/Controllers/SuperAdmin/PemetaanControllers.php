<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\AnggotaModels;
use App\Models\PemetaanModels;
use App\Models\RoleModels;
use Illuminate\Http\Request;

class PemetaanControllers extends Controller
{
    function index()
    {
        $pemetaan = PemetaanModels::select('tb_pemetaan.*', 'tb_kelompok.id_kelompok', 'tb_anggota.nama_petani', 'tb_panen_petani.total_tonase')
            ->join('tb_anggota', 'tb_pemetaan.id_anggota', '=', 'tb_anggota.id_anggota')
            ->join('tb_panen_petani', 'tb_pemetaan.id_panen_petani', '=', 'tb_panen_petani.id_panen_petani')
            ->join('tb_kelompok', 'tb_pemetaan.id_kelompok', '=', 'tb_kelompok.id_kelompok')
            ->get();
        return view('admin.pemetaan.index', compact('pemetaan'));
    }
    function create()
    {
        // $pemetaan = PemetaanModels::select('tb_pemetaan.*', 'tb_kelompok.kelompok', 'tb_anggota.nama_petani', 'tb_panen_petani.total_tonase')
        //     ->join('tb_anggota', 'tb_pemetaan.id_anggota', '=', 'tb_anggota.id_anggota')
        //     ->join('tb_panen_petani', 'tb_pemetaan.id_panen_petani', '=', 'tb_panen_petani.id_panen_petani')
        //     ->join('tb_kelompok', 'tb_pemetaan.id_kelompok', '=', 'tb_kelompok.id_kelompok')
        //     ->get();
        // return view('admin.pemetaan.create', compact('pemetaan'));
        $kelompok = RoleModels::all();
        $anggota = AnggotaModels::all();
        return view('admin.pemetaan.create', compact('kelompok', 'anggota'));
    }


    function createData(Request $request)
    {
        PemetaanModels::create([
            'id_kelompok' => $request->input('kelompok'),
            'id_anggota' => $request->input('anggota'),
            'lat' => $request->input('lat'),
            'long' => $request->input('long'),
            'id_panen_petani' => $request->input('tonase'),
        ]);
        return redirect('/data-user');
    }
}
