<?php

use Illuminate\Database\Seeder;

class ContratoDocTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\Entities\ContratoDocente::class)->create([
            'user'       => '232323',
            'materia_id' => '1',
            'gestion'    => 'I/2015',
            'activo'     => 1,
            'ua_id'      => 1
        ]);

        factory(App\Entities\ContratoDocente::class)->create([
            'user'       => '242424',
            'materia_id' => '2',
            'gestion'    => 'I/2015',
            'activo'     => 1,
            'ua_id'      => 1
        ]);

        factory(App\Entities\ContratoDocente::class)->create([
            'user'       => '252525',
            'materia_id' => '3',
            'gestion'    => 'I/2015',
            'activo'     => 1,
            'ua_id'      => 1
        ]);

        factory(App\Entities\ContratoDocente::class)->create([
            'user'       => '262626',
            'materia_id' => '4',
            'gestion'    => 'I/2015',
            'activo'     => 1,
            'ua_id'      => 1
        ]);

        factory(App\Entities\ContratoDocente::class)->create([
            'user'       => '272727',
            'materia_id' => '5',
            'gestion'    => 'I/2015',
            'activo'     => 1,
            'ua_id'      => 1
        ]);

        factory(App\Entities\ContratoDocente::class)->create([
            'user'       => '282828',
            'materia_id' => '6',
            'gestion'    => 'I/2015',
            'activo'     => 1,
            'ua_id'      => 1
        ]);

        factory(App\Entities\ContratoDocente::class)->create([
            'user'       => '292929',
            'materia_id' => '7',
            'gestion'    => 'I/2015',
            'activo'     => 1,
            'ua_id'      => 1
        ]);

        factory(App\Entities\ContratoDocente::class)->create([
            'user'       => '303030',
            'materia_id' => '8',
            'gestion'    => 'I/2015',
            'activo'     => 1,
            'ua_id'      => 1
        ]);

        factory(App\Entities\ContratoDocente::class)->create([
            'user'       => '313131',
            'materia_id' => '9',
            'gestion'    => 'I/2015',
            'activo'     => 1,
            'ua_id'      => 1
        ]);

        factory(App\Entities\ContratoDocente::class)->create([
            'user'       => '323232',
            'materia_id' => '10',
            'gestion'    => 'I/2015',
            'activo'     => 1,
            'ua_id'      => 1
        ]);

        factory(App\Entities\ContratoDocente::class)->create([
            'user'       => '333333',
            'materia_id' => '11',
            'gestion'    => 'I/2015',
            'activo'     => 1,
            'ua_id'      => 1
        ]);

        factory(App\Entities\ContratoDocente::class)->create([
            'user'       => '343434',
            'materia_id' => '12',
            'gestion'    => 'I/2015',
            'activo'     => 1,
            'ua_id'      => 1
        ]);

        factory(App\Entities\ContratoDocente::class)->create([
            'user'       => '353535',
            'materia_id' => '13',
            'gestion'    => 'I/2015',
            'activo'     => 1,
            'ua_id'      => 1
        ]);

        factory(App\Entities\ContratoDocente::class)->create([
            'user'       => '363636',
            'materia_id' => '14',
            'gestion'    => 'I/2015',
            'activo'     => 1,
            'ua_id'      => 1
        ]);

        factory(App\Entities\ContratoDocente::class)->create([
            'user'       => '373737',
            'materia_id' => '15',
            'gestion'    => 'I/2015',
            'activo'     => 1,
            'ua_id'      => 1
        ]);
    }
}
