<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateNotaDocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nota_docentes', function (Blueprint $table) {

            $table->increments('id');

            $table->integer('id_cursante')->unsigned();
            $table->integer('id_docente')->unsigned();
            $table->integer('indicador1');
            $table->integer('indicador2');
            $table->integer('indicador3');
            $table->integer('indicador4');
            $table->integer('indicador5');
            $table->integer('indicador6');
            $table->integer('indicador7');
            $table->integer('indicador8');
            $table->integer('indicador9');
            $table->integer('indicador10');
            $table->integer('indicador11');
            $table->integer('indicador12');
            $table->integer('indicador13');
            $table->integer('indicador14');
            $table->integer('indicador15');
            $table->integer('indicador16');
            $table->integer('indicador17');
            $table->integer('indicador18');
            $table->integer('indicador19');
            $table->integer('indicador20');

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
        Schema::drop('nota_docentes');
    }
}
