<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PanenPetaniModels extends Model
{
    use HasFactory;

    protected $table = 'tb_panen_petani';
    protected $primaryKey = 'id_panen_petani';

    protected $guarded = [];
}
