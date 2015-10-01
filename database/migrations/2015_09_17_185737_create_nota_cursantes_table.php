<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotaCursantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nota_cursantes', function (Blueprint $table) {
            $table->engine='InnoDB';

            $table->increments('id');
            $table->integer('id_cursante')->unsigned();
            $table->integer('id_materia')->unsigned();
            //todos los 1 son del parametro "DECIDIR"
            $table->integer('11a');
            $table->integer('11b');
            $table->integer('11c');
            $table->integer('12a');
            $table->integer('12b');
            $table->integer('prom1');
            //todos los 2 son del parametro "SABER"
            $table->integer('21a');
            $table->integer('21b');
            $table->integer('21c');
            $table->integer('22a');
            $table->integer('22b');
            $table->integer('22c');
            $table->integer('prom2');
            //todos los 3 son del parametro "HACER"
            $table->integer('31a');
            $table->integer('31b');
            $table->integer('31c');
            $table->integer('31d');
            $table->integer('31e');
            $table->integer('31f');
            $table->integer('31g');
            $table->integer('prom3');
            //todos los 4 son del parametro "SER", evaluan entre cursantes, el facilitador y el Jefe de evaluacion.
            $table->integer('41aCursante');
            $table->integer('41bCursante');
            $table->integer('41cCursante');
            $table->integer('41dCursante');
            $table->integer('prom4Cursante');
            $table->integer('41aFacil');
            $table->integer('41bFacil');
            $table->integer('41cFacil');
            $table->integer('41dFacil');
            $table->integer('prom4Facil');
            $table->integer('41aJE');
            $table->integer('41bJE');
            $table->integer('41cJE');
            $table->integer('41dJE');
            $table->integer('prom4JE');
            //El promedio de las tres evaluaciones de 4
            $table->integer('prom4');

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
        Schema::drop('nota_cursantes');
    }
}
