<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PanenKelompokControllers extends Controller
{
    function index()
    {
        // $join = PanenPetaniModels::select('tb_panen_petani.*', 'tb_anggota.nama_petani', 'tb_kelompok.kelompok')
        //     ->join('tb_anggota', 'tb_panen_petani.id_anggota', '=', 'tb_anggota.id_anggota')
        //     ->join('tb_kelompok', 'tb_panen_petani.id_kelompok', '=', 'tb_kelompok.id_kelompok')
        //     ->where('tb_panen_petani.id_tanggal_panen', $id_tanggal_panen)
        //     ->get();
        return view("admin.ketelusuran.kelompokpanen.index");
    }
}
