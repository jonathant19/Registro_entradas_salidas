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
        Schema::create('hora_trabajadas', function (Blueprint $table) {
            $table->id('Id_Hora_trabajada');
            $table->date('Fecha');
            $table->decimal('Total_horas', 4, 2);
            $table->unsignedBigInteger('Id_Empleado')->nullable();
            $table->unsignedBigInteger('Id_tipo_horas')->nullable();

            $table->foreign('Id_Empleado')->references('id')->on('empleados');
            $table->foreign('Id_tipo_horas')->references('id')->on('tipo_horas');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hora_trabajadas');
    }
};
