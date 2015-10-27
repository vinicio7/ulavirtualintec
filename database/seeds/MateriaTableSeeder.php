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

        /* Los que están comentados está por verse si son materias

        factory(App\Entities\Materia::class)->create([
            'nombreMateria' => 'Planificación del Estado Plurinacional'
        ]);

        factory(App\Entities\Materia::class)->create([
            'nombreMateria' => 'Dimensiones del Poder del Estado'
        ]);

        factory(App\Entities\Materia::class)->create([
            'nombreMateria' => 'Relaciones Internacionales'
        ]);

        factory(App\Entities\Materia::class)->create([
            'nombreMateria' => 'Defensa de los Intereses del Estado'
        ]);

        factory(App\Entities\Materia::class)->create([
            'nombreMateria' => 'El Estado Plurinacional de Bolivia'
        ]);

        factory(App\Entities\Materia::class)->create([
            'nombreMateria' => 'Metodología de la Investigación'
        ]);*/

        factory(App\Entities\Materia::class)->create([
            'nombreMateria' => 'Dimensión Ciencia y Tecnología'
        ]);

        factory(App\Entities\Materia::class)->create([
            'nombreMateria' => 'Investigación Científica'
        ]);

        factory(App\Entities\Materia::class)->create([
            'nombreMateria' => 'Dimensión Militar'
        ]);

        factory(App\Entities\Materia::class)->create([
            'nombreMateria' => 'Prospectiva'
        ]);

        factory(App\Entities\Materia::class)->create([
            'nombreMateria' => 'Historia Crítica de Bolivia'
        ]);

        factory(App\Entities\Materia::class)->create([
            'nombreMateria' => 'Inteligencia Estratégica'
        ]);

        factory(App\Entities\Materia::class)->create([
            'nombreMateria' => 'Defensa Legal del Estado'
        ]);

        factory(App\Entities\Materia::class)->create([
            'nombreMateria' => 'Construcción y Consolidación del Estado Plurinacional'
        ]);

        factory(App\Entities\Materia::class)->create([
            'nombreMateria' => 'Gestón Constructiva del Conflicto sin Daño'
        ]);

        factory(App\Entities\Materia::class)->create([
            'nombreMateria' => 'Teoría del Estado'
        ]);

        factory(App\Entities\Materia::class)->create([
            'nombreMateria' => 'Dimensión Política'
        ]);

        factory(App\Entities\Materia::class)->create([
            'nombreMateria' => 'Relaciones Internacionales'
        ]);

        factory(App\Entities\Materia::class)->create([
            'nombreMateria' => 'Planificación Estratégica'
        ]);

        factory(App\Entities\Materia::class)->create([
            'nombreMateria' => 'Dimensión Económica'
        ]);

        factory(App\Entities\Materia::class)->create([
            'nombreMateria' => 'Dimensión Cultural'
        ]);

        /*Los siguientes comentados estan en su pagina web de calificaciones pero no en la malla curricular
        factory(App\Entities\Materia::class)->create([
            'nombreMateria' => 'Geopolítica'
        ]);

        factory(App\Entities\Materia::class)->create([
            'nombreMateria' => 'Toma de Decisiones'
        ]);

        factory(App\Entities\Materia::class)->create([
            'nombreMateria' => 'Seguridad y Defensa UNASUR'
        ]);
        */
    }
}
