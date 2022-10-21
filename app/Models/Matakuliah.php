<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    use HasFactory;

    protected $table = "_matakuliahs";
    protected $fillable = [
        'kode_mk',
        'nama_mk' ,
        'created_at',
        'updated_at'
    ];
}
