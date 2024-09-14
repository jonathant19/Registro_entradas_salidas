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
        Schema::create('motivos', function (Blueprint $table) {
            $table->id(); // Definimos la clave primaria
            $table->string('Nombre_motivo', 100); // Campo para el nombre del motivo
            $table->text('Descripcion')->nullable(); // Campo para la descripción (opcional)
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motivos');
    }
};
