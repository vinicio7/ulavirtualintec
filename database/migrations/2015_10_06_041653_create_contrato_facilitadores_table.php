<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContratoFacilitadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrato_facilitadores', function (Blueprint $table) {

            $table->engine = 'InnoDb';

            $table->increments('id');
            $table->integer('user')->unsigned();
            $table->integer('materia_id')->unsigned();
            $table->string('gestion');
            $table->boolean('activo');
            $table->integer('ua_id')->unsigned();
            $table->timestamps();

            $table->foreign('materia_id')
                ->references('id')->on('materias')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->foreign('ua_id')
                ->references('id')->on('unidad_academicas')
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
        Schema::drop('contrato_facilitadores');
    }
}
