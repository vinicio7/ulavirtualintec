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
        //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
        //!!EL REGISTRO 1 DEBE SER CIVIL!!!
        //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
        factory(App\Entities\Grade::class)->create([

            'grado' => 'Civil'
        ]);
        factory(App\Entities\Grade::class)->create([

            'grado' => 'CN. DAEN.'
        ]);

        factory(App\Entities\Grade::class)->create([

            'grado' => 'CN. DEMN.'
        ]);

        factory(App\Entities\Grade::class)->create([

            'grado' => 'CF. DEMN.'
        ]);

        factory(App\Entities\Grade::class)->create([

            'grado' => 'CF. DIM.'
        ]);

        factory(App\Entities\Grade::class)->create([

            'grado' => 'CC. DEMN.'
        ]);

        factory(App\Entities\Grade::class)->create([

            'grado' => 'CC. DIM.'
        ]);

        factory(App\Entities\Grade::class)->create([

            'grado' => 'CNL. DEM.'
        ]);
        factory(App\Entities\Grade::class)->create([

            'grado' => 'CNL. DIM.'
        ]);
        factory(App\Entities\Grade::class)->create([

            'grado' => 'TCNL. DEM.'
        ]);
        factory(App\Entities\Grade::class)->create([

            'grado' => 'TCNL. DIM.'
        ]);
    }
}
