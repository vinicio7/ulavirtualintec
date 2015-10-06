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
        'fuerza' => $faker->name
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
        'expedido'    => $faker->randomElement($array = array ('LP', 'SC', 'CBBA', 'TJ', 'BN')),
        'role'      => 'cursante',
        'telefono'  => $faker->numberBetween($min = 100, $max = 1000000),
        'fnac'      => $faker->date($format = 'Y-m-d', $max = 'now'),
        'direccion' => $faker->address,
        'profesion' => $faker->title,
        'grade_id'  => $faker->numberBetween($min = 1, $max = 5),
        'hin'       => $faker->time($format = 'H:i:s', $max = 'now'),
        'hout'       => $faker->time($format = 'H:i:s', $max = 'now')
    ];
});

$factory->define(App\Entities\Kardex::class, function(Faker\Generator $faker){
        return [
            'gestion'    => $faker->name,
            'activo'     => $faker->boolean(),
            'user_id'    => $faker->numberBetween($min = 1000, $max = 10000000),
            'materia_id' => $faker->numberBetween($min = 1, $max =15),
            'ua_id'      => $faker->numberBetween($min = 1, $max =3)
        ];
});



