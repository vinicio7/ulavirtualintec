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
        $this->crearKardexes(2);

        //Creando kardex
        factory(App\Entities\Kardex::class)->create([
            'gestion' => '1/2015',
            'activo' => 'true',
            'user_id' => '4',
            'materia_id' => '1',
        ]);
    }

    public function crearKardexes($num)
    {
        factory(App\Entities\Kardex::class, $num)->create();
    }
}
