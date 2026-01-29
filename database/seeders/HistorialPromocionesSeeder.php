<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HistorialPromocionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     DB::table('historial_promociones')->insert([
    'nombre' => 'Descuento Navideño',
    'imagen' => 'descuento_navidad.jpg',
    'descripcion' => 'Disfruta de un 20% de descuento en todos nuestros productos.',
    'descuento' => 20,
    'fecha_inicio' => '2024-06-01',
    'fecha_fin' => '2024-08-31',
    'created_at' => now(),
    'updated_at' => now(),
]);
    }
}
