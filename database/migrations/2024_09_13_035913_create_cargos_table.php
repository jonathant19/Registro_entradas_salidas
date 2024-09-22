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
        Schema::create('cargos', function (Blueprint $table) {
            $table->id(); // Definimos la clave primaria
            $table->string('Nombre_cargo', 50); // Campo para el nombre del cargo
            $table->string('Descripcion', 255)->nullable(); // Campo para la descripción, puede ser nulo
            $table->string('Salario', 255); // Campo para el salario
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cargos');
    }
};
