<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->crearUsuarios(500);
        $this->crearAdmin();
    }

    /**
     * Para crear usuarios
     *
     * @param $num
     */
    public function crearUsuarios($num)
    {
        factory(App\Entities\User::class, $num)->create();
    }

    /**
     * Para crear docentes propios
     *
     */
    public function crearAdmin()
    {
        factory(App\Entities\User::class)->create([
            'id'        => '3',
            'nickname'  => 'charlie',
            'nombres'   => 'Charlie',
            'paterno'   => 'Seoane',
            'materno'   => 'Sánchez',
            'email'     => 'charlie@hotmail.com',
            'password'  => bcrypt('admin'),
            'sexo'      => 'masculino',
            'role'      => 'admin',
        ]);
    }
}
