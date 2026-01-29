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
            'url' => '/menu/principal',
            'fecha_publicación' => '2024-06-01',
            'estado' => true,
        ]);

        MenuVerificacion::create([
            'nombre' => 'Menú Vegetariano',
            'url' => '/menu/vegetariano',
            'fecha_publicación' => '2024-06-15',
            'estado' => true,
        ]);
    }
}