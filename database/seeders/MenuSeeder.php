<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menu::create([
            'nombre' => 'Menú Principal',
            'url' => '/menu/principal',
            'fecha_publicación' => '2024-06-01',
            'estado' => true,
        ]);

        Menu::create([
            'nombre' => 'Menú Vegetariano',
            'url' => '/menu/vegetariano',
            'fecha_publicación' => '2024-06-15',
            'estado' => true,
        ]);


    }
}
