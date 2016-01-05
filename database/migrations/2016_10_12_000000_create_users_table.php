<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->engine='InnoDB';

            $table->integer('id')->unsigned()->primary();
            $table->string('nickname')->unique();
            $table->string('nombres');
            $table->string('paterno')->nullable();
            $table->string('materno')->nullable();
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->enum('sexo',['masculino','femenino']);
            $table->string('expedido',10);
            $table->enum('role', ['admin', 'director', 'docente', 'facilitador', 'cursante', 'invitado']);
            $table->integer('telefono');
            $table->date('fnac');
            $table->string('direccion');
            $table->string('profesion')->nullable();
            $table->integer('grade_id')->unsigned();
            $table->string('parentesco')->nullable();
            $table->string('nomYap')->nullable();
            $table->integer('tel')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('grade_id')
                ->references('id')->on('grades')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
