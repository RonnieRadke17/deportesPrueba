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
        Schema::create('usuario', function (Blueprint $table) {
            $table->id('idUsuario');
            $table->string('nombres', 15)->nullable();
            $table->string('apellido', 35)->nullable();
            $table->string('Correo', 35)->nullable();
            $table->string('contraseña', 15)->nullable();
            $table->unsignedBigInteger('rol_idrol');
            $table->timestamps();

            $table->foreign('rol_idrol')
                ->references('idrol')
                ->on('rol')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario|');
    }
};
