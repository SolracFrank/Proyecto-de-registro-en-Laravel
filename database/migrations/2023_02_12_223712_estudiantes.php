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
        schema::create('estudiantes', function(Blueprint $table)
        {
            $table -> id();
            $table -> string('ApellidoPaterno');
            $table -> string('ApellidoMaterno');
            $table -> string('Nombre');
            $table -> string('CURP',18)->unique();
            $table -> string('Ciudad');
            $table -> string('Colonia');
            $table -> string('CodigoPostal',5);
            $table -> string('Telefono');
            $table -> string('TelefonoTutor');
            $table -> string('Email')->unique();
            $table -> string('fEspecialidad');
            $table -> string('sEspecialidad');
            $table->double('Promedio', 5, 2);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiantes');
    }
};
