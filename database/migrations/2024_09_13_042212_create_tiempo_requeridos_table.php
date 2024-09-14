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
        Schema::create('tiempo_requeridos', function (Blueprint $table) {
            $table->id(); // Definimos la clave primaria
            $table->string('Descripcion', 50); // Campo para la descripción del tiempo requerido
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tiempo_requeridos');
    }
};
