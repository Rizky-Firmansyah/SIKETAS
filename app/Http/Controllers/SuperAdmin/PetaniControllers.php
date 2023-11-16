<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\AnggotaModels;
use App\Models\PanenPetaniModels;
use App\Models\RoleModels;
use App\Models\TanggalPanenModels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PetaniControllers extends Controller
{
    function index($id_tanggal_panen)
    {
        $join = PanenPetaniModels::select('tb_panen_petani.*', 'tb_anggota.nama_petani', 'tb_kelompok.kelompok')
            ->join('tb_anggota', 'tb_panen_petani.id_anggota', '=', 'tb_anggota.id_anggota')
            ->join('tb_kelompok', 'tb_panen_petani.id_kelompok', '=', 'tb_kelompok.id_kelompok')
            ->where('tb_panen_petani.id_tanggal_panen', $id_tanggal_panen)
            ->get();
        return view("admin.ketelusuran.petani.index", ['join' => $join, 'id_tanggal_panen' => $id_tanggal_panen]);
    }

    function create($id_tanggal_panen)
    {
        $id_kelompok = TanggalPanenModels::findOrFail($id_tanggal_panen)->id_kelompok;

        // Mengambil anggota berdasarkan id_kelompok
        $anggota = AnggotaModels::where('id_kelompok', $id_kelompok)->get();

        return view('admin.ketelusuran.petani.create', compact('anggota', 'id_tanggal_panen'));
    }
    function createData($id_tanggal_panen, Request $request)
    {
        PanenPetaniModels::create([
            'id_tanggal_panen' => $id_tanggal_panen,
            'id_kelompok' => $request->input('id_kelompok'),
            'id_anggota' => $request->input('anggota'),
            'total_tonase_petani' => $request->input('total_tonase_petani'),
            'total_janjang_petani' => $request->input('total_janjang_petani'),
        ]);
        return redirect("/data-petani/{$id_tanggal_panen}");
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

        return view('admin.ketelesuran.admin.index', compact('dataPanen', 'totalTonaseKeseluruhan', 'totalJanjangKeseluruhan'));
    }


}
