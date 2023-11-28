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
        Schema::create('extracurricular', function (Blueprint $table) {
            $table->id('IdExtracurricular');
            $table->string('Nombre', 20)->nullable();
            $table->unsignedBigInteger('categoria_idcategoria');
            $table->timestamps();

            $table->foreign('categoria_idcategoria')
                ->references('idcategoria')
                ->on('categoria')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('extracurriculars');
    }
};
