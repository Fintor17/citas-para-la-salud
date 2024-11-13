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
        Schema::create('registros', function (Blueprint $table) {
            $table->increments('id');

            $table->string('Nombre_apellido')->nullable();
            $table->integer('Edad');
            $table->string('email')->unique();
            $table->string('Sexo');
            $table->string('Calle_num');
            $table->string('Colonia');
            $table->integer('Codigo_postal');
            $table->string('Estado');
            $table->string('password');
            $table->string('Telefono');
            $table->string('Tipo_usuario');
            $table->timestamps();
        });
        Schema::table('registros', function (Blueprint $table) {
            $table->string('Nombre_apellido')->default('Nombre no proporcionado')->change();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registros');
    }
};
