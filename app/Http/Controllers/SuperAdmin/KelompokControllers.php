<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\KelompokModels;
use App\Models\RoleModels;
use App\Models\TanggalPanenModels;
use Illuminate\Http\Request;

class KelompokControllers extends Controller
{
    function index()
    {
        $kelompok = KelompokModels::select('tb_panen_kelompok.*', 'tb_kelompok.kelompok')
            ->join('tb_kelompok', 'tb_kelompok.id_kelompok', '=', 'tb_panen_kelompok.id_kelompok')
            ->orderBy('tanggal_keberangkatan', 'desc')
            ->get();
        return view("admin.ketelusuran.kelompok.index", compact('kelompok'));
    }

    function create(Request $request)
    {
        $kelompok = RoleModels::where('kelompok', '<>', 'Super Admin')->get();
        return view("admin.ketelusuran.kelompok.create", compact("kelompok"))->render();
    }

    function createData(Request $request)
    {
        KelompokModels::create([
            'id_kelompok' => $request->input('nama_kelompok'),
            'tanggal_keberangkatan' => $request->input('tanggal_keberangkatan'),
            'tujuan_pks' => $request->input('tujuan_pks'),
            'no_spb' => $request->input('no_spb'),
            'nama_supir' => $request->input('nama_supir'),
            'no_kendaraan' => $request->input('no_kendaraan'),
            'bruto' => $request->input('bruto'),
            'sortasi' => $request->input('sortasi'),
            'netto' => $request->input('netto'),
        ]);
        return redirect('/data-kelompok');
    }


}

