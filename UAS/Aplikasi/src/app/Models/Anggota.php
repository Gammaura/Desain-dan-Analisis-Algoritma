<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lengkap', 'tanggal_lahir', 'jenis_kelamin', 'nomor_telepon',
        'email', 'alamat', 'tanggal_bergabung', 'status_keanggotaan'
    ];
}
