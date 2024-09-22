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
        Schema::create('horarios', function (Blueprint $table) {
            $table->id();
            $table->string('Dia_semana', 10);
            $table->time('Hora_entrada');
            $table->time('Hora_salida');
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
        Schema::dropIfExists('horarios');
    }
};
