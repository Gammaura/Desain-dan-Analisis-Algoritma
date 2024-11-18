<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pembeli;

class PembeliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pembeli = [
            [
                'nama' => 'Andi Setiawan',
                'email' => 'andi@example.com',
                'alamat' => 'Jl. Merdeka No. 10, Jakarta',
                'no_telepon' => '081234567890',
            ],
            [
                'nama' => 'Budi Pratama',
                'email' => 'budi@example.com',
                'alamat' => 'Jl. Raya No. 20, Bandung',
                'no_telepon' => '082345678901',
            ],
            [
                'nama' => 'Citra Dewi',
                'email' => 'citra@example.com',
                'alamat' => 'Jl. Pahlawan No. 15, Surabaya',
                'no_telepon' => '083456789012',
            ],        
        ];
        
    }
}
