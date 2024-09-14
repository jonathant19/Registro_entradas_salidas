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
        Schema::create('registro_diarios', function (Blueprint $table) {
            $table->id();
            $table->date('Fecha');
            $table->time('Hora_entrada');
            $table->time('Hora_salida');
            $table->unsignedBigInteger('Id_empleado')->nullable();

            $table->foreign('Id_empleado')->references('id')->on('empleados');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registro_diarios');
    }
};
