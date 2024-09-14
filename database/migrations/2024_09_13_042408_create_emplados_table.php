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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Id_datos_personales')->nullable();
            $table->unsignedBigInteger('Id_contactos')->nullable();
            $table->unsignedBigInteger('Id_autenticacion')->nullable();
            $table->unsignedBigInteger('Id_Cargo')->nullable();
            $table->date('Fecha_contratacion');
            $table->string('Turno', 10);
            
            $table->foreign('Id_datos_personales')->references('id')->on('datos_personales');
            $table->foreign('Id_contactos')->references('id')->on('contactos');
            $table->foreign('Id_autenticacion')->references('id')->on('autenticacion');
            $table->foreign('Id_Cargo')->references('id')->on('cargos');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
