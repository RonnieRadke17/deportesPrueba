<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('evento', function (Blueprint $table) {
            $table->id('IdEvento');
            $table->string('Nombre', 20)->nullable();
            $table->enum('Tipo', ['Interno', 'Externo'])->nullable();
            $table->date('Fecha')->nullable();
            $table->time('Hora')->nullable();
            $table->enum('Lugar', ['Polidevportivo', 'Instalaciones UPP'])->nullable();
            $table->integer('Capacidad')->nullable();
            $table->integer('Registrados')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evento');
    }
};
