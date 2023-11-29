<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PanenPetaniModels;
use App\Models\RoleModels;
use App\Models\TanggalPanenModels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TanggalPanenControllers extends Controller
{
    // TanggalPanenControllers.php
    public function index()
    {
        $tanggal = TanggalPanenModels::select('tb_tanggal_panen.*', 'tb_kelompok.kelompok')
            ->join('tb_kelompok', 'tb_kelompok.id_kelompok', '=', 'tb_tanggal_panen.id_kelompok')
            ->orderBy('tanggal', 'desc')
            ->get();
        return view("admin.ketelusuran.tanggalpanen.index", compact('tanggal'));
    }


    function create()
    {
        $anggota = RoleModels::all();
        return view("admin.ketelusuran.tanggalpanen.create", compact("anggota"));
    }
    function createData(Request $request)
    {
        TanggalPanenModels::create([
            'id_kelompok' => $request->input('nama_kelompok'),
            'tanggal' => $request->input('tanggal'),
        ]);
        return redirect('/tanggal-panen');
    }

}
