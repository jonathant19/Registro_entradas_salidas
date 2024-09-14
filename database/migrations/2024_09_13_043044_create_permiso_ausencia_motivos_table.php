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
        Schema::create('permiso_ausencia_motivos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Id_permiso')->nullable();
            $table->unsignedBigInteger('Id_Ausencia')->nullable();
            $table->unsignedBigInteger('Id_motivo')->nullable();
            
            $table->foreign('Id_permiso')->references('id')->on('permisos');
            $table->foreign('Id_Ausencia')->references('id')->on('ausencias');
            $table->foreign('Id_motivo')->references('id')->on('motivos');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permiso_ausencia_motivos');
    }
};
