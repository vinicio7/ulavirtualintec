<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKardexesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kardexes', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('gestion');
            $table->boolean('activo');
            $table->integer('user_id')->unsigned();
            $table->integer('materia_id')->unsigned();
            $table->integer('ua_id')->unsigned();
            $table->integer('notaCursante_id')->unsigned();
            $table->integer('notaDocente_id')->unsigned();
            $table->timestamps();


            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('restrict')
                ->onUpdate('cascade');


            $table->foreign('materia_id')
                ->references('id')->on('materias')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->foreign('notaCursante_id')
                ->references('id')->on('nota_cursantes')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->foreign('notaDocente_id')
                ->references('id')->on('nota_docentes')
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
        Schema::drop('kardexes');
    }
}
