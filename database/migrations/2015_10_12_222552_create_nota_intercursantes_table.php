<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotaIntercursantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nota_intercursantes', function (Blueprint $table) {
            $table->engine='InnoDB';

            $table->increments('id');
            $table->integer('cursante_calificador')->unsigned();
            $table->integer('cursante_calificado') ->unsigned();
            $table->integer('materia_id');
            $table->integer('4a');
            $table->integer('4b');
            $table->integer('4c');
            $table->integer('4d');
            $table->decimal('prom4', 5, 2);
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
        Schema::drop('nota_intercursantes');
    }
}
