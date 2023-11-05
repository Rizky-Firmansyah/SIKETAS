<?php

namespace App\Http\Controllers;

use App\Models\AnggotaModels;
use App\Models\PanenPetaniModels;
use App\Models\RoleModels;
use Illuminate\Http\Request;

class PetaniControllers extends Controller
{
    function index()
    {
        $join = PanenPetaniModels::select('tb_panen_petani.*', 'tb_anggota.nama_petani', 'tb_kelompok.kelompok')
            ->join('tb_anggota', 'tb_panen_petani.id_anggota', '=', 'tb_anggota.id_anggota')
            ->join('tb_kelompok', 'tb_panen_petani.id_kelompok', '=', 'tb_kelompok.id_kelompok')
            ->get();
        return view("admin.ketelusuran.petani.index", compact('join'));
    }

    function create()
    {
        $kelompok = RoleModels::all();
        $anggota = AnggotaModels::all();
        return view('admin.ketelusuran.petani.create', compact('kelompok', 'anggota'));
    }
    function createData(Request $request)
    {
        $tonase_panen1 = $request->input('tonase_panen1');
        $tonase_panen2 = $request->input('tonase_panen2');
        $tonase_panen3 = $request->input('tonase_panen3');
        $total_tonase = $tonase_panen1 + $tonase_panen2 + $tonase_panen3;

        $janjang_panen1 = $request->input('janjang_panen1');
        $janjang_panen2 = $request->input('janjang_panen2');
        $janjang_panen3 = $request->input('janjang_panen3');
        $total_janjang = $janjang_panen1 + $janjang_panen2 + $janjang_panen3;

        PanenPetaniModels::create([
            'id_kelompok' => $request->input('kelompok'),
            'id_anggota' => $request->input('anggota'),
            'tgl_panen1' => $request->input('tgl_panen1'),
            'tgl_panen2' => $request->input('tgl_panen2'),
            'tgl_panen3' => $request->input('tgl_panen3'),
            'tonase_panen1' => $tonase_panen1,
            'tonase_panen2' => $tonase_panen2,
            'tonase_panen3' => $tonase_panen3,
            'jumlah_janjang1' => $janjang_panen1,
            'jumlah_janjang2' => $janjang_panen2,
            'jumlah_janjang3' => $janjang_panen3,
            'total_tonase' => $total_tonase,
            'total_janjang' => $total_janjang,
        ]);

        return redirect('/data-petani');
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

}
