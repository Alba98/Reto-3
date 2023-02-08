<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichas_duales', function (Blueprint $table) {
            $table->id();
            $table->string('anio_academico');
            $table->string('curso');
            $table->timestamps();
            $table->foreignId('id_alumno')->constrained('alumnos')->cascadeOnDelete();
            $table->foreignId('id_empresa')->constrained('empresas')->cascadeOnDelete();
            $table->foreignId('id_tempresa')->constrained('tempresa')->cascadeOnDelete();
            $table->foreignId('id_tuniversidad')->constrained('tuniversidad')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fichas_duales');
    }
};
