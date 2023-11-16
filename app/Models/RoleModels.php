<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleModels extends Model
{
    use HasFactory;
    protected $table = 'tb_kelompok';
    protected $primaryKey = 'id_kelompok';

    protected $guarded = [];

    public function panenPetani()
    {
        return $this->hasMany(PanenPetaniModels::class, 'id_kelompok');
    }

}
