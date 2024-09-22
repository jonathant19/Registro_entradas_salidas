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
        Schema::create('permisos', function (Blueprint $table) {
            $table->id();
            $table->date('Fecha_solicitud');
            $table->string('Estado', 20);
            $table->unsignedBigInteger('Id_Tipo')->nullable();
            $table->unsignedBigInteger('Id_Tiempo')->nullable();
            $table->unsignedBigInteger('Id_Empleado')->nullable();
            
            $table->foreign('Id_Tipo')->references('id')->on('tipo_permisos');
            $table->foreign('Id_Tiempo')->references('id')->on('tiempo_requeridos');
            $table->foreign('Id_Empleado')->references('id')->on('empleados');
            
            $table->timestamps();;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permisos');
    }
};
