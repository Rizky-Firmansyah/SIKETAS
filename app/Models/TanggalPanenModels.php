<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TanggalPanenModels extends Model
{
    use HasFactory;

    protected $table = 'tb_tanggal_panen';
    // protected $primaryKey = 'id_user';

    protected $guarded = [];
    protected $primaryKey = 'id_tanggal_panen';

    protected $casts = [
        'tanggal' => 'date',
    ];

    public function panenPetani()
    {
        return $this->hasMany(PanenPetaniModels::class, 'id_tanggal_panen', 'id_tanggal_panen');
    }

    public function kelompokTani()
    {
        return $this->belongsTo(RoleModels::class, 'id_kelompok', 'id_kelompok');
    }



}
