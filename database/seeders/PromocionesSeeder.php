<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Promociones;

class PromocionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Promociones::create([
            'nombre' => 'Descuento Navideño',
            'imagen' => 'descuento_navidad.jpg',
            'descripcion' => 'Disfruta de un 20% de descuento en todos nuestros platillos durante estas navidades.',
            'descuento' => 20,
            'fecha_inicio' => '2024-06-01',
            'fecha_fin' => '2024-08-31',
        ]);
    }
}
