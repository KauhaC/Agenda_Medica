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
        Schema::create('controle_horas', function (Blueprint $table) {
            $table->id();
            $table->usintBigInteger('id_medico');
            $table->usintBigInteger('id_plantao');
            $table->time('horas_trabalhadas');
            $table->timestamps();
            $table->foreign('id_medico')->references('id')->on('medicos')->onDelete('cascade');
            $table->foreign('id_plantao')->references('id')->on('plantoes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     * 
     */
    public function down(): void
    {
        Schema::dropIfExists('controle_horas');
    }
};
