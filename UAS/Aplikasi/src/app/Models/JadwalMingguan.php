<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalMingguan extends Model
{
    use HasFactory;

    protected $fillable = [
        'minggu_ke',
        'hari',
        'nama_olahraga',
        'waktu_mulai',
        'waktu_selesai',
        'tempat',
        'perlengkapan',
    ];
}
