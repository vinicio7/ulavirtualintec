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
            'city' => 'La Paz'
        ]);

        factory(App\Entities\City::class)->create([
            'id'   => 'CBBA',
            'city' => 'Cochabamba'
        ]);

        factory(App\Entities\City::class)->create([
            'id'   => 'SC',
            'city' => 'Santa Cruz'
        ]);

        factory(App\Entities\City::class)->create([
            'id'   => 'PDO',
            'city' => 'Pando'
        ]);

        factory(App\Entities\City::class)->create([
            'id'   => 'BN',
            'city' => 'Beni'
        ]);

        factory(App\Entities\City::class)->create([
            'id'   => 'OR',
            'city' => 'Oruro'
        ]);

        factory(App\Entities\City::class)->create([
            'id'   => 'PT',
            'city' => 'Potosí'
        ]);

        factory(App\Entities\City::class)->create([
            'id'   => 'TJ',
            'city' => 'Tarija'
        ]);

        factory(App\Entities\City::class)->create([
            'id'   => 'CHQ',
            'city' => 'Chuquisaca'
        ]);
    }
}
