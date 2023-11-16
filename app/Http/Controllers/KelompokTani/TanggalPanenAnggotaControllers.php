<?php

namespace App\Http\Controllers\KelompokTani;

use App\Http\Controllers\Controller;
use App\Models\TanggalPanenModels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TanggalPanenAnggotaControllers extends Controller
{
    public function index()
    {
        $id_kelompok = Auth::user()->id_kelompok;
        $tanggal = TanggalPanenModels::select('tb_tanggal_panen.*', 'tb_kelompok.kelompok')
            ->join('tb_kelompok', 'tb_kelompok.id_kelompok', '=', 'tb_tanggal_panen.id_kelompok')
            ->where('tb_tanggal_panen.id_kelompok', $id_kelompok)
            ->orderBy('tanggal', 'desc')
            ->get();
        return view("kelompoktani.datapanenanggota.tanggalpanen.index", compact('tanggal'));
    }


    function create()
    {
        return view("kelompoktani.datapanenanggota.tanggalpanen.create");
    }
    function createData(Request $request)
    {
        $id_kelompok = Auth::user()->id_kelompok;
        TanggalPanenModels::create([
            'id_kelompok' => $id_kelompok,
            'tanggal' => $request->input('tanggal'),
        ]);
        return redirect('/tanggal-panen-anggota');
    }
}
