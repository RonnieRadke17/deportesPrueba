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
        Schema::create('grupo', function (Blueprint $table) {
            $table->id('idgrupo');
            $table->unsignedBigInteger('extracurricular_IdExtracurricular');
            $table->unsignedBigInteger('Periodo_idPeriodo');
            $table->unsignedBigInteger('profesor_IdProfesor');
            $table->timestamps();

            $table->foreign('extracurricular_IdExtracurricular')
                ->references('IdExtracurricular')
                ->on('extracurricular')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');

            $table->foreign('Periodo_idPeriodo')
                ->references('idPeriodo')
                ->on('Periodo')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');

            $table->foreign('profesor_IdProfesor')
                ->references('IdProfesor')
                ->on('profesor')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grupo');
    }
};
