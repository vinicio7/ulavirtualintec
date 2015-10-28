<?php

use Illuminate\Database\Seeder;

class KardexTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->crearKardexes(2);
        $this->crearKardexFabri(1);
        $this->crearKardexFabri(2);
        $this->crearKardexFabri(3);
        $this->crearKardexFabri(4);
        $this->crearKardexFabri(5);
        $this->crearKardexFabri(7);
        factory(App\Entities\Kardex::class)->create([
            'materia_id' => 1,
            'user'       => 4197244,
            'gestion'    => 'I/2015',
            'grupo'      => 1,
            'activo'     => true,
            'ua_id'      => 1,
        ]);
    }

    public function crearKardexes($num)
    {
        factory(App\Entities\Kardex::class, $num)->create();
    }

    public function crearKardexFabri($materia)
    {
        //Creando kardex
        factory(App\Entities\Kardex::class)->create([
            'materia_id' => $materia,
            'user'       => 4,
            'gestion'    => 'I/2015',
            'grupo'      => 1,
            'activo'     => true,
            'ua_id'      => 1,

            //Llenar notas
            //todos los 1 son del parametro "DECIDIR"
            '11a'       => 90,
            '11b'       => 90,
            '11c'       => 90,
            '12a'       => 90,
            '12b'       => 90,
            'prom1'     => 90,

            //todos los 2 son del parametro "SABER"
            '21a'       => 80,
            '21b'       => 80,
            '21c'       => 80,
            '22a'       => 80,
            '22b'       => 80,
            '22c'       => 80,
            'prom2'     => 80,

            //todos los 3 son del parametro "HACER"
            '31a'       => 70,
            '31b'       => 70,
            '31c'       => 70,
            '31d'       => 70,
            '31e'       => 70,
            '31f'       => 70,
            '31g'       => 70,
            'prom3'     => 70,

            //todos los 4 son del parametro "SER", evaluan entre cursantes, el facilitador y el Jefe de evaluacion.
            'prom4Cursante'     => 70,

            '41aFacil'          => 80,
            '41bFacil'          => 80,
            '41cFacil'          => 80,
            '41dFacil'          => 80,
            'prom4Facil'        => 80,

            '41aJE'             => 90,
            '41bJE'             => 90,
            '41cJE'             => 90,
            '41dJE'             => 90,
            'prom4JE'           => 90,

            //El promedio de las tres evaluaciones de 4
            'prom4'             => 87,
        ]);
    }
}
