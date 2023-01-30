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
            $table->timestamps();
            $table->foreignId('id_persona')->constrained('alumnos');
            $table->foreignId('id_empresa')->constrained('empresas');
            $table->foreignId('id_tempresa')->constrained('tempresa');
            $table->foreignId('id_tuniversidad')->constrained('tuniversidad');
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
