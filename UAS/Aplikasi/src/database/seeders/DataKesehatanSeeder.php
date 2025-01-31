<?php

namespace Database\Seeders;

use App\Models\DataKesehatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataKesehatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DataKesehatan::create([
            'anggota_id' => 1, // ID anggota yang sudah ada di tabel anggotas
            'nama' => 'Arditya Adjie Rosandi',
            'tinggi_badan' => 180,
            'berat_badan' => 80,
            'bmi' => 22.5,
            'tekanan_darah' => '120/80',
            'denyut_jantung' => 75,
            'riwayat_cedera' => 'Tidak ada',
            'kondisi_kesehatan_khusus' => 'Asma'
        ]);

        DataKesehatan::create([
            'anggota_id' => 2, // ID anggota yang sudah ada di tabel anggotas
            'nama' => 'Rafly Akbar Ravsanjani',
            'tinggi_badan' => 180,
            'berat_badan' => 70,
            'bmi' => 20.5,
            'tekanan_darah' => '110/70',
            'denyut_jantung' => 85,
            'riwayat_cedera' => 'Tidak ada',
            'kondisi_kesehatan_khusus' => 'Sakit Gigi'
        ]);

        DataKesehatan::create([
            'anggota_id' => 3, // ID anggota yang sudah ada di tabel anggotas
            'nama' => 'Dhicky Haryadi Supriyono',
            'tinggi_badan' => 182,
            'berat_badan' => 72,
            'bmi' => 21.5,
            'tekanan_darah' => '100/80',
            'denyut_jantung' => 85,
            'riwayat_cedera' => 'Tidak ada',
            'kondisi_kesehatan_khusus' => 'Tidak ada'
        ]);
    }
}
