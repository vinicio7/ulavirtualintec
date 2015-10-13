<?php

use Illuminate\Database\Seeder;

class GradeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->iniciar();
    }

    private function iniciar()
    {
        factory(App\Entities\Grade::class)->create([
            'fuerza' => 'Civil',
            'grado' => 'Civil.'
        ]);
        factory(App\Entities\Grade::class)->create([
            'fuerza' => 'Armada',
            'grado' => 'CN. DAEN.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'fuerza' => 'Armada',
            'grado' => 'CN. DEMN.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'fuerza' => 'Armada',
            'grado' => 'CF. DEMN.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'fuerza' => 'Armada',
            'grado' => 'CF. DIM.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'fuerza' => 'Armada',
            'grado' => 'CC. DEMN.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'fuerza' => 'Armada',
            'grado' => 'CC. DIM.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'fuerza' => 'Ejército',
            'grado' => 'CNL. DEM.'
        ]);
        factory(App\Entities\Grade::class)->create([
            'fuerza' => 'Ejército',
            'grado' => 'CNL. DIM.'
        ]);
        factory(App\Entities\Grade::class)->create([
            'fuerza' => 'Ejército',
            'grado' => 'TCNL. DEM..'
        ]);
        factory(App\Entities\Grade::class)->create([
            'fuerza' => 'Ejército',
            'grado' => 'TCNL. DIM'
        ]);
    }
}
