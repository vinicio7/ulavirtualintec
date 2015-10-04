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
        $this->crearUsuarios(10);
        $this->crearAdmin();
        $this->crearCursante();
        $this->crearFacilitador();
        $this->crearDirector();
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

    public function crearCursante()
    {
        factory(App\Entities\User::class)->create([
            'id'        => '4',
            'nickname'  => 'fabricio',
            'nombres'   => 'Fabricio',
            'paterno'   => 'Torrico',
            'materno'   => 'Barahona',
            'email'     => 'fabricio@hotmail.com',
            'password'  => bcrypt('fabricio'),
            'sexo'      => 'masculino',
            'role'      => 'cursante',
        ]);
    }

    public function crearFacilitador()
    {
        factory(App\Entities\User::class)->create([
            'id'        => '5',
            'nickname'  => 'behimar',
            'nombres'   => 'Behimar',
            'paterno'   => 'Alvarado',
            'materno'   => '',
            'email'     => 'b@hotmail.com',
            'password'  => bcrypt('behimar'),
            'sexo'      => 'masculino',
            'role'      => 'facilitador',
        ]);
    }

    public function crearDirector()
    {
        factory(\App\Entities\User::class)->create([
            'id'        => '6',
            'nickname'  => 'director',
            'nombres'   => 'Director',
            'paterno'   => 'APP',
            'materno'   => '',
            'email'     => 'director@gmail.com',
            'password'  => bcrypt('director'),
            'sexo'      => 'masculino',
            'role'      => 'director',
        ]);
    }
}
