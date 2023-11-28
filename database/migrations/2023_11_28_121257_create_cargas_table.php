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
        Schema::create('carga', function (Blueprint $table) {
            $table->id('IdCarga');
            $table->unsignedBigInteger('IdAlumno');
            $table->unsignedBigInteger('grupo_idgrupo');
            $table->timestamps();

            $table->foreign('IdAlumno')
                ->references('IdAlumno')
                ->on('alumno')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');

            $table->foreign('grupo_idgrupo')
                ->references('idgrupo')
                ->on('grupo')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carga');
    }
};
