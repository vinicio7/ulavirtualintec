<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // aca van a ir los departamentos para los C.I.

        factory(App\Entities\City::class)->create([
            'id'   => 'LP',
            'ciudad' => 'La Paz'
        ]);

        factory(App\Entities\City::class)->create([
            'id'   => 'CBBA',
            'ciudad' => 'Cochabamba'
        ]);

        factory(App\Entities\City::class)->create([
            'id'   => 'SC',
            'ciudad' => 'Santa Cruz'
        ]);

        factory(App\Entities\City::class)->create([
            'id'   => 'PDO',
            'ciudad' => 'Pando'
        ]);

        factory(App\Entities\City::class)->create([
            'id'   => 'BN',
            'ciudad' => 'Beni'
        ]);

        factory(App\Entities\City::class)->create([
            'id'   => 'OR',
            'ciudad' => 'Oruro'
        ]);

        factory(App\Entities\City::class)->create([
            'id'   => 'PT',
            'ciudad' => 'Potosí'
        ]);

        factory(App\Entities\City::class)->create([
            'id'   => 'TJ',
            'ciudad' => 'Tarija'
        ]);

        factory(App\Entities\City::class)->create([
            'id'   => 'CHQ',
            'ciudad' => 'Chuquisaca'
        ]);
    }
}
