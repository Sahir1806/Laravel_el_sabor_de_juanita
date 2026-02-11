<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        // User::factory(10)->create();
        $this->call(UsuarioSeeder::class);
        $this->call(MenuVerificacionSeeder::class);
        $this->call(PromocionesSeeder::class);
        $this->call(ReservacionesSeeder::class);    
    }
}
