<?php

namespace Database\Seeders;

use App\Models\JadwalMingguan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JadwalMingguanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JadwalMingguan::create([
            'minggu_ke' => 1,
            'hari' => 'Sabtu',
            'nama_olahraga' => 'Bulu Tangkis',
            'waktu_mulai' => '19:00',
            'waktu_selesai' => '22:00',
            'tempat' => 'Gedung B',
            'perlengkapan' => 'Raket, Shuttlecock'
        ]);

        JadwalMingguan::create([
            'minggu_ke' => 1,
            'hari' => 'Minggu',
            'nama_olahraga' => 'Jalan Sehat',
            'waktu_mulai' => '06:30',
            'waktu_selesai' => '08:30',
            'tempat' => 'Lapangan Umum',
            'perlengkapan' => 'Sepatu Olahraga'
        ]);

        JadwalMingguan::create([
            'minggu_ke' => 2,
            'hari' => 'Sabtu',
            'nama_olahraga' => 'Futsal',
            'waktu_mulai' => '19:00',
            'waktu_selesai' => '22:00',
            'tempat' => 'Gedung B',
            'perlengkapan' => 'Sepatu Futsal, Bola'
        ]);

        JadwalMingguan::create([
            'minggu_ke' => 2,
            'hari' => 'Minggu',
            'nama_olahraga' => 'Atletik',
            'waktu_mulai' => '06:00',
            'waktu_selesai' => '07:30',
            'tempat' => 'Stadion',
            'perlengkapan' => 'Sepatu Lari'
        ]);

        JadwalMingguan::create([
            'minggu_ke' => 3,
            'hari' => 'Sabtu',
            'nama_olahraga' => 'Renang',
            'waktu_mulai' => '07:00',
            'waktu_selesai' => '09:00',
            'tempat' => 'Kolam Renang',
            'perlengkapan' => 'Pakaian Renang, Kacamata Renang'
        ]);

        JadwalMingguan::create([
            'minggu_ke' => 3,
            'hari' => 'Minggu',
            'nama_olahraga' => 'Senam Sehat',
            'waktu_mulai' => '06:30',
            'waktu_selesai' => '07:30',
            'tempat' => 'Gedung A',
            'perlengkapan' => 'Matras Yoga'
        ]);

        JadwalMingguan::create([
            'minggu_ke' => 4,
            'hari' => 'Sabtu',
            'nama_olahraga' => 'Angkat Beban',
            'waktu_mulai' => '19:00',
            'waktu_selesai' => '22:00',
            'tempat' => 'Gedung A',
            'perlengkapan' => 'Sarung Tangan, Sabuk Angkat Beban'
        ]);

        JadwalMingguan::create([
            'minggu_ke' => 4,
            'hari' => 'Minggu',
            'nama_olahraga' => 'Beladiri',
            'waktu_mulai' => '14:00',
            'waktu_selesai' => '17:00',
            'tempat' => 'Gedung A',
            'perlengkapan' => 'Pelindung Kepala, Sarung Tangan'
        ]);
    }
}
