<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('segundoNombre')->nullable();
            $table->string('apellido');
            $table->string('segundoApellido')->nullable();
            $table->string('apellidoDeCasado')->nullable();
            $table->string('tipoDeDocumento');
            $table->string('fechaDeNacimiento');
            $table->string('telefono');
            $table->string('email');
            $table->string('sexo');
            $table->string('estadoCivil');
            $table->string('direccion');
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
        Schema::dropIfExists('users');
    }
}
