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
            $table->foreignId('id_persona')->constrained('personas')->primary();
            $table->timestamps();
            $table->foreignId('id_empresa')->constrained('empresas');
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
