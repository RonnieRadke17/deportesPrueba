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
        Schema::create('asistencia', function (Blueprint $table) {
            $table->id('IdAsistencia');
            $table->unsignedBigInteger('IdEvento');
            $table->unsignedBigInteger('IdAlumno');
            $table->enum('Asistencia', ['Asistio', 'No Asistio'])->nullable();
            $table->timestamps();

            $table->foreign('IdEvento')
                ->references('IdEvento')
                ->on('evento')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');

            $table->foreign('IdAlumno')
                ->references('IdAlumno')
                ->on('alumno')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asistencia');
    }
};
