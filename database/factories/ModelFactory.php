<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Entities\Grade::class, function (Faker\Generator $faker) {
    return [
        'grado'  => $faker->name,

    ];
});


$factory->define(App\Entities\Materia::class, function(Faker\Generator $faker){
    return [
        'nombreMateria' => $faker->name
    ];
});

$factory->define(App\Entities\User::class, function(Faker\Generator $faker){
    return [
        'id'        => $faker->unique()->numberBetween($min = 1000, $max = 10000000),
        'nickname'  => $faker->unique()->userName,
        'nombres'   => $faker->firstName,
        'paterno'   => $faker->lastName,
        'materno'   => $faker->lastName,
        'email'     => $faker->unique()->email,
        'password'  => bcrypt('escuela'),
        'sexo'      => $faker->randomElement($array = array ('masculino','femenino')),
        'expedido'  => $faker->randomElement($array = array ('LP', 'SC', 'CBBA', 'TJ', 'BN')),
        'role'      => 'cursante',
        'telefono'  => $faker->numberBetween($min = 100, $max = 1000000),
        'fnac'      => $faker->date($format = 'Y-m-d', $max = 'now'),
        'direccion' => $faker->address,
        'profesion' => $faker->title,
        'grade_id'  => $faker->numberBetween($min = 1, $max = 5),

    ];
});

$factory->define(App\Entities\Kardex::class, function(Faker\Generator $faker){
        return [

            'materia_id' => $faker->numberBetween($min = 1, $max =15),
            'user'       => $faker->unique()->numberBetween($min = 1000, $max = 10000000),
            'gestion'    => $faker->randomElement($array = array ('I/2015','II/2015')),
            'grupo'      => $faker->numberBetween($min = 1, $max = 5),
            'activo'     => $faker->boolean(),
            'ua_id'      => $faker->numberBetween($min = 1, $max =3),

            //Llenar notas
            //todos los 1 son del parametro "DECIDIR"
            '11a'       => $faker->numberBetween($min = 1, $max =100),
            '11b'       => $faker->numberBetween($min = 1, $max =100),
            '11c'       => $faker->numberBetween($min = 1, $max =100),
            '12a'       => $faker->numberBetween($min = 1, $max =100),
            '12b'       => $faker->numberBetween($min = 1, $max =100),
            'prom1'       => $faker->numberBetween($min = 1, $max =100),

            //todos los 2 son del parametro "SABER"
            '21a'       => $faker->numberBetween($min = 1, $max =100),
            '21b'       => $faker->numberBetween($min = 1, $max =100),
            '21c'       => $faker->numberBetween($min = 1, $max =100),
            '22a'       => $faker->numberBetween($min = 1, $max =100),
            '22b'       => $faker->numberBetween($min = 1, $max =100),
            '22c'       => $faker->numberBetween($min = 1, $max =100),
            'prom2'       => $faker->numberBetween($min = 1, $max =100),

            //todos los 3 son del parametro "HACER"
            '31a'       => $faker->numberBetween($min = 1, $max =100),
            '31b'       => $faker->numberBetween($min = 1, $max =100),
            '31c'       => $faker->numberBetween($min = 1, $max =100),
            '31d'       => $faker->numberBetween($min = 1, $max =100),
            '31e'       => $faker->numberBetween($min = 1, $max =100),
            '31f'       => $faker->numberBetween($min = 1, $max =100),
            '31g'       => $faker->numberBetween($min = 1, $max =100),
            'prom3'       => $faker->numberBetween($min = 1, $max =100),

            //todos los 4 son del parametro "SER", evaluan entre cursantes, el facilitador y el Jefe de evaluacion.
            /*'41aCursante'       => $faker->numberBetween($min = 1, $max =100),
            '41bCursante'       => $faker->numberBetween($min = 1, $max =100),
            '41cCursante'       => $faker->numberBetween($min = 1, $max =100),
            '41dCursante'       => $faker->numberBetween($min = 1, $max =100),*/
            'prom4Cursante'     => $faker->numberBetween($min = 1, $max =100),
            '41aFacil'          => $faker->numberBetween($min = 1, $max =100),
            '41bFacil'          => $faker->numberBetween($min = 1, $max =100),
            '41cFacil'          => $faker->numberBetween($min = 1, $max =100),
            '41dFacil'          => $faker->numberBetween($min = 1, $max =100),
            'prom4Facil'        => $faker->numberBetween($min = 1, $max =100),

            '41aJE'             => $faker->numberBetween($min = 1, $max =100),
            '41bJE'             => $faker->numberBetween($min = 1, $max =100),
            '41cJE'             => $faker->numberBetween($min = 1, $max =100),
            '41dJE'             => $faker->numberBetween($min = 1, $max =100),
            'prom4JE'           => $faker->numberBetween($min = 1, $max =100),

            //El promedio de las tres evaluaciones de 4
            'prom4'             => $faker->numberBetween($min = 1, $max =100)
        ];
});


$factory->define(App\Entities\UnidadAcademica::class, function(Faker\Generator $faker){
    return [
        'ua' => $faker->city(),
    ];
});


$factory->define(App\Entities\ContratoDocente::class, function(Faker\Generator $faker){
    return [
        'user'       => $faker -> numberBetween($min = 1000, $max = 10000000),
        'materia_id' => $faker -> numberBetween($min = 1, $max = 15),
        'gestion'    => $faker -> randomElement($array = array ('I/2015', 'II/2015')),
        'activo'     => $faker -> boolean(),
        'ua_id'      => $faker -> numberBetween($min = 1, $max = 3),
    ];
});
$factory->define(App\Entities\Leader::class, function(Faker\Generator $faker){
    return [
        'cargo'     =>$faker -> name
    ];
});