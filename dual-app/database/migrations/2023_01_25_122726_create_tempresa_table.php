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
        Schema::create('tempresa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_persona')->constrained('docentes')->primary()->cascadeOnDelete();
            $table->timestamps();
            $table->foreignId('id_empresa')->constrained('empresas')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tempresa');
    }
};
