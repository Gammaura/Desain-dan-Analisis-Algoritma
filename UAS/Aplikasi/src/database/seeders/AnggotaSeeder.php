<?php

namespace Database\Seeders;

use App\Models\Anggota;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Anggota::create([
            'nama_lengkap' => 'Arditya Adjie Rosandi',
            'tanggal_lahir' => '2005-01-18',
            'jenis_kelamin' => 'Laki-laki',
            'nomor_telepon' => '087717956553',
            'email' => 'ardityaadjierosandi18@gmail.com',
            'alamat' => 'Jl. Gatot Subroto',
            'tanggal_bergabung' => '2025-01-01',
            'status_keanggotaan' => 'Aktif'
        ]);

        Anggota::create([
            'nama_lengkap' => 'Rafly Akbar Ravsanjani',
            'tanggal_lahir' => '2005-02-10',
            'jenis_kelamin' => 'Laki-laki',
            'nomor_telepon' => '081217956553',
            'email' => 'raflyakbar@gmail.com',
            'alamat' => 'Jl. Citra RAya',
            'tanggal_bergabung' => '2025-01-02',
            'status_keanggotaan' => 'Aktif'
        ]);

        Anggota::create([
            'nama_lengkap' => 'Dhicky Haryadi Supriyono',
            'tanggal_lahir' => '2005-04-20',
            'jenis_kelamin' => 'Laki-laki',
            'nomor_telepon' => '081211356553',
            'email' => 'dhickyharyadi@gmail.com',
            'alamat' => 'Jl. Citra RAya',
            'tanggal_bergabung' => '2025-01-03',
            'status_keanggotaan' => 'Aktif'
        ]);
        
    }
}
