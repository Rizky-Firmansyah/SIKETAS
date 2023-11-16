<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\RoleModels;

class PanenPetaniModels extends Model
{
    use HasFactory;

    protected $table = 'tb_panen_petani';
    protected $primaryKey = 'id_panen_petani';

    protected $guarded = [];


    // Relasi dengan TanggalPanenModels
    public function tanggalPanen()
    {
        return $this->belongsTo(TanggalPanenModels::class, 'id_tanggal_panen');
    }

    // Relasi dengan KelompokTaniModels
    public function kelompokTani()
    {
        return $this->belongsTo(RoleModels::class, 'id_kelompok');
    }


}
