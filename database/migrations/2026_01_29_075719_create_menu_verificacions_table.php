<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
    Schema::create('menu_verificacion', function (Blueprint $table) {
        $table->id();
        $table->string('nombre');
        $table->string('imagen')->nullable(); // ruta o nombre del archivo
        $table->date('fecha_publicación');
        $table->boolean('estado')->default(1);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_verificacions');
    }
};
