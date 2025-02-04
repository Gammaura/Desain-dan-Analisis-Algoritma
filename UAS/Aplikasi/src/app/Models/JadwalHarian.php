<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalHarian extends Model
{
    use HasFactory;

    protected $fillable = [
        'hari', 'nama_olahraga', 'waktu_mulai', 'waktu_selesai', 'tempat'
    ];
}
