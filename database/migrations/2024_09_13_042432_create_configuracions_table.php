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
        Schema::create('configuraciones', function (Blueprint $table) {
            $table->id();
    $table->string('Hora_entrada')->nullable();
    $table->string('Hora_salida')->nullable();
    $table->string('Horario_flexible')->nullable();
    $table->string('Notificaciones_activas')->nullable();
    $table->string('Cambio_clave')->nullable();
    $table->string('Cambio_usuario')->nullable();
    $table->unsignedBigInteger('Id_Empleado')->nullable();
    
    $table->foreign('Id_Empleado')->references('id')->on('empleados');
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('configuraciones');
    }
};
