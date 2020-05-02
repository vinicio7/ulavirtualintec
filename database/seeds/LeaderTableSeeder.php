<?php

use Illuminate\Database\Seeder;

class LeaderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->crearCargos();
    }

    public function crearCargos()
    {
        factory(App\Entities\Leader::class)->create([
            'cargo'        => 'dirNal',
        ]);
        factory(App\Entities\Leader::class)->create([
            'cargo'        => 'subDir',
        ]);
        factory(App\Entities\Leader::class)->create([
            'cargo'        => 'jefe_deac',
        ]);
    }
}
