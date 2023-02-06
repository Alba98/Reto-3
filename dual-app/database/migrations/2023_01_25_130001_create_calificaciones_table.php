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
        Schema::create('calificaciones', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('fecha');
            $table->foreignId('id_evaluacion')->constrained('evaluaciones')->cascadeOnDelete();
            $table->foreignId('id_ficha')->constrained('fichas_duales')->cascadeOnDelete();
            $table->foreignId('id_ficha_seguimiento')->constrained('fichas_seguimiento')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calificaciones');
    }
};
