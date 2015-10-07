<?php

use Illuminate\Database\Seeder;

class UnidadAcademicaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Entities\UnidadAcademica::class)->create([
        'ua' => 'La Paz'
        ]);

        factory(App\Entities\UnidadAcademica::class)->create([
            'ua' => 'Cochabamba'
        ]);

        factory(App\Entities\UnidadAcademica::class)->create([
            'ua' => 'Santa Cruz'
        ]);
    }

}
