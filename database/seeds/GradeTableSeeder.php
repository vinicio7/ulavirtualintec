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
            'fuerza' => 'Armada',
            'grado' => 'TF. CGON.'
        ]);
    }
}
