<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bienvenida;

class BienvenidaSeeder extends Seeder
{
    public function run(): void
    {
        Bienvenida::create([
            'imagen' => 'images/bienvenidas/banner_publico.jpg',
            'estado' => 1,
        ]);

        Bienvenida::create([
            'imagen' => 'images/bienvenidas/banner_extra.jpg',
            'estado' => 1,
        ]);
    }
}