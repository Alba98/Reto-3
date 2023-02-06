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
        Schema::create('fichas_seguimiento', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('fecha');
            $table->string('asistentes');
            $table->enum('tipo_tutoria', ['presencial', 'telefonica','email']);
            $table->string('objetivos');
            $table->string('resumen');
            $table->foreignId('id_fichadual')->constrained('fichas_duales')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fichas_seguimiento');
    }
};
