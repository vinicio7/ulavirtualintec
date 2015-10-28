<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(GradeTableSeeder::class);
        $this->call(MateriaTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(UnidadAcademicaTableSeeder::class);
        $this->call(KardexTableSeeder::class);
        $this->call(ContratoDocTableSeeder::class);

        Model::reguard();
    }
}
