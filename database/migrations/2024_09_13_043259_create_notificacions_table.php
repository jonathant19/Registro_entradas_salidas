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
        Schema::create('notificacions', function (Blueprint $table) {
            $table->id();
            $table->string('Mensaje')->nullable();
            $table->date('Fecha_envio');
            $table->string('Destino', 100);
            $table->unsignedBigInteger('Id_Motivo_Notificacion')->nullable();
            $table->unsignedBigInteger('Id_Empleado')->nullable();

            $table->foreign('Id_Motivo_Notificacion')->references('id')->on('motivos_notificacions');
            $table->foreign('Id_Empleado')->references('id')->on('empleados');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notificacions');
    }
};
