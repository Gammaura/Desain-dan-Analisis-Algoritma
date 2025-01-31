<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MenuMakanan;

class MenuMakananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menu_makanan = [
            [
                'name' => 'Nasi Goreng',
                'description' => 'Nasi goreng dengan topping telur dan ayam.',
                'price' => 25000,
                'image' => 'images/nasi-goreng.jpg',
            ],
            [
                'name' => 'Mie Ayam',
                'description' => 'Mie ayam lezat dengan tambahan pangsit.',
                'price' => 20000,
                'image' => 'images/mie-ayam.jpg',
            ],
            [
                'name' => 'Mie Goreng',
                'description' => 'Mie goreng dengan bumbu pedas.',
                'price' => 20000,
                'image' => 'images/mie-goreng.jpg',
            ]
        ];

        // Menambahkan data ke tabel `menu_makanan`
        foreach ($menu_makanan as $menu_makanan) {
            MenuMakanan::create($menu_makanan);
        }
    }
}
