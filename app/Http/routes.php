<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/********* para logeo y recupeacion de contrasenas *****/

Route::get('login', [
    'uses'  => 'Auth\AuthController@getLogin',
    'as'    => 'login'
]);
Route::post('login', [
    'uses'  => 'Auth\AuthController@postLogin',
    'as'    => 'login'
]);
Route::get('logout', [
    'uses'  => 'Auth\AuthController@getLogout',
    'as'    => 'logout'
]);

// registration routes
Route::get('registro', [
    'uses'  => 'Auth\AuthController@getRegister',
    'as'    => 'register'
]);
Route::POST('registro', [
    'uses'  => 'Auth\AuthController@POSTRegister',
    'as'    => 'register'
]);


/******************* fin ******************/

Route::group(['middleware' => 'auth'], function() {

    Route::get('/', [
        'uses' => 'UserController@main',
        'as' => 'user.main'
    ]);

});

Route::get('uu',function(){
    return view('layouts.master');
});


//************************ Rutas Cursante ******************


// Ruta calificar docente
Route::get('calificacionDocente', [
    'uses'  => 'CursanteController@calificarDocente',
    'as'    => 'cursante.calificarDocente'
]);

//Ruta calificar cursante (cursante a los mismos cursantes de su grupo)
Route::get('calificacionCursante',
    [
    'uses' => 'CursanteController@calificarCursante',
    'as'   => 'cursante.calificarCursante'
]);

//Ruta formulario calificar docente
Route::post('formCalifDoc',
    [
    'uses' => 'CursanteController@formCalifDoc',
    'as'   => 'cursante.formCalifDoc'
]);

//Ruta formulario calificar cursante
Route::post('formCalifCursante',
    [
        'uses' => 'CursanteController@formCalifCursante',
        'as'   => 'cursante.formCalifCursante'
    ]);


//Ruta ver calificaciones cursante
Route::get('calificaciones',
    [
        'uses' => 'CursanteController@verCalificaciones',
        'as'   => 'cursante.verCalificaciones'
    ]);

//****************************prueba ******************

Route::get('alumno/{id}', [
    'uses'  => 'CursanteController@usuario',
    'as'    => 'usuario'
]);