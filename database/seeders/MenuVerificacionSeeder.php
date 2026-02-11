<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MenuVerificacion;

class MenuVerificacionSeeder extends Seeder
{
    public function run(): void
    {
        MenuVerificacion::create([
            'nombre' => 'Menú Principal',
            'imagen' => 'imagenes_menu/principal.jpg',
            'fecha_publicación' => '2024-06-01',
            'estado' => 1,
        ]);

        MenuVerificacion::create([
            'nombre' => 'Menú Vegetariano',
            'imagen' => 'imagenes_menu/vegetariano.jpg',
            'fecha_publicación' => '2024-06-15',
            'estado' => 1,
        ]);
    }
}