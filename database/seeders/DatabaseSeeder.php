<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

/* public function run(): void
    {
          // User::factory(10)->create();

        User::factory()->create([
            'nombre' => 'Juan Perez',
            'personas' => 4,
            'fecha' => '2024-07-15',
            'comentarios' => 'Mesa cerca de la ventana',
            'telefono' => '5551234567',
            'correo' => 'jjuanp@gmail.com' ,
        ]);
        $this->call(ReservacionesSeeder::class);
    }*/
}
