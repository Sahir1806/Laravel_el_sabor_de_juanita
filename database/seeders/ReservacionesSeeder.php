<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reservaciones;

class ReservacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Reservaciones::create([
            'nombre' => 'Juan Perez',
            'personas' => 4,
            'fecha' => '2024-07-15',
            'comentarios' => 'Mesa cerca de la ventana',
            'telefono' => '5551234567',
            'correo' => 'jjuanp@gmail.com' ]);
            Reservaciones::create([
            'nombre' => 'Juana Perez',
            'personas' => 4,
            'fecha' => '2024-07-15',
            'comentarios' => 'Mesa cerca de la ventana',
            'telefono' => '5551234567',
            'correo' => 'jjuanp@gmail.com' ]);

    }
}
