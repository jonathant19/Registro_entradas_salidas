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
        Schema::create('datos_personales', function (Blueprint $table) {
            $table->id(); // Definimos la clave primaria
            $table->string('Nombre', 50); // Campo para el nombre
            $table->string('Apellido', 50); // Campo para el apellido
            $table->string('Cedula', 20); // Campo para la cédula
            $table->date('Fecha_nacimiento'); // Campo para la fecha de nacimiento
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datos_personales');
    }
};
