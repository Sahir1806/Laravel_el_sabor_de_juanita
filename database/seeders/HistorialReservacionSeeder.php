<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HistorialReservacion;

class HistorialReservacionSeeder extends Seeder
{
    public function run(): void
    {
        HistorialReservacion::create([
            'nombre' => 'Juan Perez',
            'personas' => 4,
            'fecha' => '2024-07-15',
            'hora' => '14:30:00',
            'telefono' => '5551234567',
            'correo' => 'jjuanp@gmail.com',
            'comentarios' => 'Mesa cerca de la ventana',
        ]);
    }
}