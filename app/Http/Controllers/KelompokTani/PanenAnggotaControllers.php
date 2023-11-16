<?php

namespace App\Http\Controllers\KelompokTani;

use App\Http\Controllers\Controller;
use App\Models\AnggotaModels;
use App\Models\PanenPetaniModels;
use App\Models\RoleModels;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PanenAnggotaControllers extends Controller
{
    function index($id_tanggal_panen)
    {
        $join = PanenPetaniModels::select('tb_panen_petani.*', 'tb_anggota.nama_petani', 'tb_kelompok.kelompok')
            ->join('tb_anggota', 'tb_panen_petani.id_anggota', '=', 'tb_anggota.id_anggota')
            ->join('tb_kelompok', 'tb_panen_petani.id_kelompok', '=', 'tb_kelompok.id_kelompok')
            ->where('tb_panen_petani.id_tanggal_panen', $id_tanggal_panen) // Menggunakan $id_tanggal_panen yang sesuai
            ->get();
        return view("kelompoktani.datapanenanggota.petani.index", ['join' => $join, 'id_tanggal_panen' => $id_tanggal_panen]);
    }

    function create($id_tanggal_panen)
    {
        $kelompok = RoleModels::all();
        $anggota = AnggotaModels::all();
        return view('kelompoktani.datapanenanggota.petani.create', compact('kelompok', 'anggota', 'id_tanggal_panen'));
    }
    function createData($id_tanggal_panen, Request $request)
    {
        $id_kelompok = Auth::user()->id_kelompok;
        PanenPetaniModels::create([
            'id_tanggal_panen' => $id_tanggal_panen,
            'id_kelompok' => $id_kelompok,
            'id_anggota' => $request->input('anggota'),
            'total_tonase_petani' => $request->input('total_tonase_petani'),
            'total_janjang_petani' => $request->input('total_janjang_petani'),
        ]);
        return redirect("/data-panen-anggota/{$id_tanggal_panen}");
    }


    function update($id)
    {
        $kelompok = RoleModels::all();
        $anggota = AnggotaModels::all();
        $panen = PanenPetaniModels::find($id);
        return view('admin.ketelusuran.petani.update', compact('panen', 'kelompok', 'anggota'));
    }

    function updateData($id, Request $request)
    {
        $tonase_panen1 = $request->input('tonase_panen1');
        $tonase_panen2 = $request->input('tonase_panen2');
        $tonase_panen3 = $request->input('tonase_panen3');
        $total_tonase = $tonase_panen1 + $tonase_panen2 + $tonase_panen3;

        $janjang_panen1 = $request->input('janjang_panen1');
        $janjang_panen2 = $request->input('janjang_panen2');
        $janjang_panen3 = $request->input('janjang_panen3');
        $total_janjang = $janjang_panen1 + $janjang_panen2 + $janjang_panen3;

        $boleh = PanenPetaniModels::find($id);
        $boleh->id_kelompok = $request->input('kelompok');
        $boleh->id_anggota = $request->input('anggota');
        $boleh->tgl_panen1 = $request->input('tgl_panen1');
        $boleh->tgl_panen2 = $request->input('tgl_panen2');
        $boleh->tgl_panen3 = $request->input('tgl_panen3');
        $boleh->tonase_panen1 = $tonase_panen1;
        $boleh->tonase_panen2 = $tonase_panen2;
        $boleh->tonase_panen3 = $tonase_panen3;
        $boleh->jumlah_janjang1 = $janjang_panen1;
        $boleh->jumlah_janjang2 = $janjang_panen2;
        $boleh->jumlah_janjang3 = $janjang_panen3;
        $boleh->total_tonase = $total_tonase;
        $boleh->total_janjang = $total_janjang;
        $boleh->save();

        return redirect('/data-petani');

    }

    public function getDataPanen($idTanggalPanen)
    {
        $totalTonaseKeseluruhan = DB::table('tb_panen_petani')
            ->where('id_tgl_panen', $idTanggalPanen)
            ->sum('total_tonase_petani');

        $totalJanjangKeseluruhan = DB::table('tb_panen_petani')
            ->where('id_tgl_panen', $idTanggalPanen)
            ->sum('total_janjang_petani');

        $dataPanen = DB::table('tb_panen_petani')
            ->select('id_panen_petani', 'id_anggota', 'id_kelompok', 'id_tgl_panen', 'total_tonase_petani', 'total_janjang_petani', 'total_tonase', 'total_janjang')
            ->where('id_tgl_panen', $idTanggalPanen)
            ->get();

        return view('kelompoktani.datapanenanggota.petani.index', compact('dataPanen', 'totalTonaseKeseluruhan', 'totalJanjangKeseluruhan'));
    }
}
