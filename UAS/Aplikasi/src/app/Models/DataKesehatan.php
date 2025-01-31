<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKesehatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'anggota_id', 'nama', 'tinggi_badan', 'berat_badan', 'bmi', 'tekanan_darah',
        'denyut_jantung', 'riwayat_cedera', 'kondisi_kesehatan_khusus'
    ];
}
