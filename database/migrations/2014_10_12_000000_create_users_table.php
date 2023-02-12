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
        Schema::create('users', function (Blueprint $table) {
            $table->id();//int notnull auntoincrement unsigned
            $table->string('name'); //un campo de tipo string 'xnombre' varchar(255); podemos poner , y un int < 255 y > 0
            $table->string('email')->unique(); //unico, osea no repetible
            $table->timestamp('email_verified_at')->nullable(); //guardar fecha de uso y puede ser null
            $table->string('password');
            $table->rememberToken();//columna varchar(100) token para mantener version iniciada
            $table->timestamps(); // created at y updated at (tiempos de registro de la base de datos)
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
};
