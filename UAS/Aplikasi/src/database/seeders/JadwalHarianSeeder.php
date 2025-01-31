<?php

namespace Database\Seeders;

use App\Models\Jadwalharian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JadwalHarianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JadwalHarian::create([
            'hari' => 'Senin',
            'nama_olahraga' => 'Atletik',
            'waktu_mulai' => '06:00',
            'waktu_selesai' => '07:30',
            'tempat' => 'Gedung A'
        ]);

        JadwalHarian::create([
            'hari' => 'Senin',
            'nama_olahraga' => 'Angkat Beban',
            'waktu_mulai' => '19:00',
            'waktu_selesai' => '21:00',
            'tempat' => 'Gedung A'
        ]);

        JadwalHarian::create([
            'hari' => 'Selasa',
            'nama_olahraga' => 'Bulu Tangkis',
            'waktu_mulai' => '19:00',
            'waktu_selesai' => '22:00',
            'tempat' => 'Gedung B'
        ]);

        JadwalHarian::create([
            'hari' => 'Rabu',
            'nama_olahraga' => 'Jalan Sehat',
            'waktu_mulai' => '06:30',
            'waktu_selesai' => '08:30',
            'tempat' => 'Gedung A'
        ]);

        JadwalHarian::create([
            'hari' => 'Rabu',
            'nama_olahraga' => 'Beladiri',
            'waktu_mulai' => '19:00',
            'waktu_selesai' => '21:00',
            'tempat' => 'Gedung A'
        ]);

        JadwalHarian::create([
            'hari' => 'Kamis',
            'nama_olahraga' => 'Renang',
            'waktu_mulai' => '07:00',
            'waktu_selesai' => '09:00',
            'tempat' => 'Gedung B'
        ]);

        JadwalHarian::create([
            'hari' => 'Kamis',
            'nama_olahraga' => 'Futsal',
            'waktu_mulai' => '19:00',
            'waktu_selesai' => '22:00',
            'tempat' => 'Gedung B'
        ]);

        JadwalHarian::create([
            'hari' => 'Jumat',
            'nama_olahraga' => 'Senam Sehat',
            'waktu_mulai' => '06:30',
            'waktu_selesai' => '07:30',
            'tempat' => 'Gedung A'
        ]);

        JadwalHarian::create([
            'hari' => 'Jumat',
            'nama_olahraga' => 'Angkat Beban',
            'waktu_mulai' => '19:00',
            'waktu_selesai' => '21:00',
            'tempat' => 'Gedung A'
        ]);

        JadwalHarian::create([
            'hari' => 'Sabtu',
            'nama_olahraga' => 'Rotasi Olahraga Mingguan',
            'waktu_mulai' => '07:00',
            'waktu_selesai' => '22:00',
            'tempat' => 'Lokasi Sesuai Ketersediaan'
        ]);

        JadwalHarian::create([
            'hari' => 'Minggu',
            'nama_olahraga' => 'Rotasi Olahraga Mingguan',
            'waktu_mulai' => '06:30',
            'waktu_selesai' => '17:00',
            'tempat' => 'Lokasi Sesuai Ketersediaan'
        ]);

    }
}
