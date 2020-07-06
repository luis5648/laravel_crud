<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;//se tiene que importar esta wea

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //aquí van los campos de la tabla empleados de la db
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('ApellidoPaterno');
            $table->string('ApellidoMaterno');
            $table->string('Email');
            $table->string('Foto');

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
        Schema::dropIfExists('empleados');
    }
}
