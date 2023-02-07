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
        Schema::create('diarios_aprendizajes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('periodo');
            $table->string('actividades');
            $table->string('reflexion');
            $table->string('problemas');
            $table->foreignId('id_ficha')->constrained('fichas_duales')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diarios_aprendizajes');
    }
};
