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
        Schema::create('participantes', function (Blueprint $table) {
            $table->id();
            $table->string('nombretutor');
            $table->string('apellidotutor');
            $table->string('email');
            $table->string('telefono');
            $table->string('nombrebebe');
            $table->string('nacimiento');
            $table->string('sexo');
            $table->string('direccion');
            $table->string('imagen');
            $table->integer('acepto');
            $table->integer('seleccion')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participantes');
    }
};
