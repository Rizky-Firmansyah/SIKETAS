<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KendaraanModels extends Model
{
    use HasFactory;
    protected $table = 'tb_kendaraan';

    protected $guarded = [];
}
