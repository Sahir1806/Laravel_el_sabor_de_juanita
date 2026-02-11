<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // SOLO crea la tabla si NO existe
        if (!Schema::hasTable('historial_reservaciones')) {
            Schema::create('historial_reservaciones', function (Blueprint $table) {
                $table->id();
                $table->string('nombre');
                $table->integer('personas');
                $table->date('fecha');
                $table->time('hora');
                $table->string('telefono');
                $table->string('correo');
                $table->text('comentarios')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historial_reservaciones'); // CORREGIDO: 'historial_reservaciones' no 'historial_reservacions'
    }
};