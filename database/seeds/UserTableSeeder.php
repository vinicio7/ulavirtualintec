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
        //$this->crearUsuarios(10);
        //$this->crearAdmin();
       //$this->crearCursante();
       // $this->crearFacilitador();
       // $this->crearDirector();
        $this->crearDocentes();
    }

    /**
     * Para crear usuarios
     *
     * @param $num
     */
    public function crearUsuarios($num)
    {
        factory(App\Entities\User::class, $num)->create();
        //factory(App\Entities\Kardex::class, $num)->create();
    }

    /**
     * Para crear docente propios
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

    public function  crearDocentes()
    {
        factory(\App\Entities\User::class)->create([
            'id'        => '232323',
            'nickname'  => 'julian',
            'nombres'   => 'Julina',
            'paterno'   => 'Di Cosmo',
            'materno'   => 'Silva',
            'password'  => bcrypt('julian'),
            'sexo'      => 'masculino',
            'role'      => 'docente',
        ]);

        factory(\App\Entities\User::class)->create([
            'id'        => '242424',
            'nickname'  => 'daniel',
            'nombres'   => 'Daniel',
            'paterno'   => 'Vaca',
            'materno'   => 'Guzman',
            'password'  => bcrypt('daniel'),
            'sexo'      => 'masculino',
            'role'      => 'docente',
        ]);

        factory(\App\Entities\User::class)->create([
            'id'        => '252525',
            'nickname'  => 'alejandro',
            'nombres'   => 'Alejandro',
            'paterno'   => 'Chumacero',
            'materno'   => 'Bracamonte',
            'password'  => bcrypt('alejandro'),
            'sexo'      => 'masculino',
            'role'      => 'docente',
        ]);

        factory(\App\Entities\User::class)->create([
            'id'        => '262626',
            'nickname'  => 'william',
            'nombres'   => 'William',
            'paterno'   => 'Ferreira',
            'materno'   => 'Oruga',
            'password'  => bcrypt('william'),
            'sexo'      => 'masculino',
            'role'      => 'docente',
        ]);

        factory(\App\Entities\User::class)->create([
            'id'        => '272727',
            'nickname'  => 'pablo',
            'nombres'   => 'Pablo',
            'paterno'   => 'Escobar',
            'materno'   => 'Oliveti',
            'password'  => bcrypt('pablo'),
            'sexo'      => 'masculino',
            'role'      => 'docente',
        ]);

        factory(\App\Entities\User::class)->create([
            'id'        => '282828',
            'nickname'  => 'cristiano',
            'nombres'   => 'Cristiano',
            'paterno'   => 'Ronaldo',
            'materno'   => 'Ronito',
            'password'  => bcrypt('cristiano'),
            'sexo'      => 'masculino',
            'role'      => 'docente',
        ]);

        factory(\App\Entities\User::class)->create([
            'id'        => '292929',
            'nickname'  => 'diego',
            'nombres'   => 'Diego Armando',
            'paterno'   => 'Maradona',
            'materno'   => 'Gaucho',
            'password'  => bcrypt('diego'),
            'sexo'      => 'masculino',
            'role'      => 'docente',
        ]);

        factory(\App\Entities\User::class)->create([
            'id'        => '303030',
            'nickname'  => 'ronaldinho',
            'nombres'   => 'Ronaldinho',
            'paterno'   => 'De Asis',
            'materno'   => 'Moreira',
            'password'  => bcrypt('ronaldinho'),
            'sexo'      => 'masculino',
            'role'      => 'docente',
        ]);

        factory(\App\Entities\User::class)->create([
            'id'        => '313131',
            'nickname'  => 'lionel',
            'nombres'   => 'Lionel',
            'paterno'   => 'Messi',
            'materno'   => 'Cushitini',
            'password'  => bcrypt('lionel'),
            'sexo'      => 'masculino',
            'role'      => 'docente',
        ]);


        factory(\App\Entities\User::class)->create([
            'id'        => '323232',
            'nickname'  => 'zidenine',
            'nombres'   => 'Zidenine',
            'paterno'   => 'Zidane',
            'materno'   => 'Calvinio',
            'password'  => bcrypt('zidenine'),
            'sexo'      => 'masculino',
            'role'      => 'docente',
        ]);


        factory(\App\Entities\User::class)->create([
            'id'        => '333333',
            'nickname'  => 'iker',
            'nombres'   => 'Iker',
            'paterno'   => 'Casillas',
            'materno'   => 'Renglones',
            'password'  => bcrypt('iker'),
            'sexo'      => 'masculino',
            'role'      => 'docente',
        ]);


        factory(\App\Entities\User::class)->create([
            'id'        => '343434',
            'nickname'  => 'romel',
            'nombres'   => 'Romel',
            'paterno'   => 'Gordito',
            'materno'   => 'Quinionez',
            'password'  => bcrypt('romel'),
            'sexo'      => 'masculino',
            'role'      => 'docente',
        ]);


        factory(\App\Entities\User::class)->create([
            'id'        => '353535',
            'nickname'  => 'ruben',
            'nombres'   => 'Ruben',
            'paterno'   => 'Dario',
            'materno'   => 'Gigena',
            'password'  => bcrypt('ruben'),
            'sexo'      => 'masculino',
            'role'      => 'docente',
        ]);


        factory(\App\Entities\User::class)->create([
            'id'        => '363636',
            'nickname'  => 'edson',
            'nombres'   => 'Edson',
            'paterno'   => 'Arantes',
            'materno'   => 'Do Nacimento',
            'password'  => bcrypt('edson'),
            'sexo'      => 'masculino',
            'role'      => 'docente',
        ]);


        factory(\App\Entities\User::class)->create([
            'id'        => '373737',
            'nickname'  => 'david',
            'nombres'   => 'David',
            'paterno'   => 'Beckam',
            'materno'   => 'Choquetarqui',
            'password'  => bcrypt('david'),
            'sexo'      => 'masculino',
            'role'      => 'docente',
        ]);
    }
}
