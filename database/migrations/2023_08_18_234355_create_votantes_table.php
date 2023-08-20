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
        Schema::create('votantes', function (Blueprint $table) {
            $table->id();
            $table->string('documento');
            $table->string('nombre');
            $table->string('mesa');
            $table->string('id_candidato_seleccionado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('votantes');
    }
};
