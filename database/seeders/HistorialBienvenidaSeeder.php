<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Historial_Bienvenida;

class HistorialBienvenidaSeeder extends Seeder
{
    public function run(): void
    {
        Historial_Bienvenida::create([
            'imagen' => 'images/bienvenidas/banner1.jpg',
            'estado' => 1,
        ]);

        Historial_Bienvenida::create([
            'imagen' => 'images/bienvenidas/banner2.jpg',
            'estado' => 0,
        ]);
    }
}