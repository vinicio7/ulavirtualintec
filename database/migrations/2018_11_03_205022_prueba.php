<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Prueba extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('kardexes1', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('materia_id')->unsigned();
            $table->integer('user')->unsigned();
            $table->string('gestion');
            $table->integer('grupo');
            $table->boolean('activo');
            $table->integer('ua_id')->unsigned();
            $table->timestamps();
            //Llenar notas
            //todos los 1 son del parametro "DECIDIR"
            $table->integer('11a');
            $table->integer('11b');
            $table->integer('11c');
            $table->integer('12a');
            $table->integer('12b');
            //$table->integer('prom1');
            $table->decimal('prom1', 5, 2);
            //todos los 2 son del parametro "SABER"
            $table->integer('21a');
            $table->integer('21b');
            $table->integer('21c');
            $table->integer('22a');
            $table->integer('22b');
            $table->integer('22c');
            //$table->integer('prom2');
            $table->decimal('prom2', 5, 2);
            //todos los 3 son del parametro "HACER"
            $table->integer('31a');
            $table->integer('31b');
            $table->integer('31c');
            $table->integer('31d');
            $table->integer('31e');
            $table->integer('31f');
            $table->integer('31g');
            //$table->integer('prom3');
            $table->decimal('prom3', 5, 2);
            //todos los 4 son del parametro "SER", evaluan entre cursantes, el facilitador y el Jefe de evaluacion.
            /*$table->integer('41aCursante');
            $table->integer('41bCursante');
            $table->integer('41cCursante');
            $table->integer('41dCursante');*/
            //$table->integer('prom4Cursante');
            $table->decimal('prom4Cursante', 5, 2);
            $table->integer('41aFacil');
            $table->integer('41bFacil');
            $table->integer('41cFacil');
            $table->integer('41dFacil');
            //$table->integer('prom4Facil');
            $table->decimal('prom4Facil', 5, 2);
            $table->integer('41aJE');
            $table->integer('41bJE');
            $table->integer('41cJE');
            $table->integer('41dJE');
            //$table->integer('prom4JE');
            $table->decimal('prom4JE', 5, 2);
            //El promedio de las tres evaluaciones de 4
            //$table->integer('prom4');
            $table->decimal('prom4', 5, 2);

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
        Schema::drop('kardexes1');
    }
}
