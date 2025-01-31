<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MenuMinuman;

class MenuMinumanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menu_minuman = [
            [
                'name' => 'Es Teh Manis',
                'description' => 'Minuman teh manis yang segar.',
                'price' => 8000,
                'image' => 'images/es-teh.jpg',
            ],
            [
                'name' => 'Jus Jeruk',
                'description' => 'Jus jeruk segar dari buah jeruk pilihan.',
                'price' => 15000,
                'image' => 'images/jus-jeruk.jpg',
            ],
            [
                'name' => 'Es Kelapa Muda',
                'description' => 'Segarnya kelapa muda dalam balutan es.',
                'price' => 20000,
                'image' => 'images/es-kelapa.jpg',
            ],
        ];

        foreach ($menu_minuman as $menu_minuman) {
            MenuMinuman::create($menu_minuman);
        }
    }
}
