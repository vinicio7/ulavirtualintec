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
        //
        factory(App\Entities\City::class)->create([
            'id'     => 'LP',
            'ciudad' => 'La Paz'
        ]);

        factory(App\Entities\City::class,2)->create();
    }
}
