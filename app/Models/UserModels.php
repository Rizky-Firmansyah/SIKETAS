<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModels extends Model
{
    use HasFactory;
    protected $table = 'tb_user';

    protected $guarded = [];
}
