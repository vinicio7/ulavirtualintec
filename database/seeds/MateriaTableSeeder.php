<?php

use Illuminate\Database\Seeder;

class MateriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // vamos a crear los nombres de las Materias

        factory(App\Entities\Materia::class)->create([
            'nombreMateria' => 'Intereses Marítimos'
        ]);

        factory(App\Entities\Materia::class)->create([
            'nombreMateria' => 'Logística Nacional'
        ]);

        factory(App\Entities\Materia::class)->create([
            'nombreMateria' => 'CiberSeguridad'
        ]);

        factory(App\Entities\Materia::class)->create([
            'nombreMateria' => 'Plantemiento de Desarrollo'
        ]);

        factory(App\Entities\Materia::class)->create([
            'nombreMateria' => 'Acuerdos Internacionales'
        ]);
    }
}
