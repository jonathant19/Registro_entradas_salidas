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
        Schema::create('contactos', function (Blueprint $table) {
            $table->id();
            $table->string('Direccion', 100)->nullable();
            $table->string('Correo', 50)->nullable();
            $table->string('Telefono', 15)->nullable();
            $table->unsignedBigInteger('Id_datos_personales')->nullable(); 
        
            //esta tabla cual es datos_personales - nop veo la migracion hasta hace poco estaba creada yo la estaba trabajando
            // es la tabla donde se guardan los contactos del empleado correo, telefono, dir etc 
           // $table->foreign('Id_datos_personales')->references('id')->on('datos_personales');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contactos');
    }
};
