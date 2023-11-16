<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelompokModels extends Model
{
    use HasFactory;

    protected $table = 'tb_panen_kelompok';
    // protected $primaryKey = 'id_user';

    protected $guarded = [];
    protected $primaryKey = 'id_panen_kelompok';

    protected $casts = [
        'tanggal' => 'date',
    ];
}
