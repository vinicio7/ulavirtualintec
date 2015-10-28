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

//Ruta seleccionar materia para calificar cursante (cursante a los mismos cursantes de su grupo)
Route::get('selecMateriaCalificacionCursante',
    [
        'uses' => 'CursanteController@selecMateriaCalificarCursante',
        'as'   => 'cursante.selecMateriaCalificarCursante'
    ]);

//Ruta calificar cursante (cursante a los mismos cursantes de su grupo)
Route::post('calificacionCursante',
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


//Ruta calificacion cursante exitosa no se usa!!
Route::get('CalificacionExitosa',
    [
        'uses' => 'CursanteController@verCalificacionExitosa',
        'as'   => 'cursante.calificacionExitosa'
    ]);

//Ruta generar pdf de calificaciones interCursatnes
Route::post('imprimirCalificacionCursante',[
    'uses' => 'PdfController@calificacionCursante',
    'as'   => 'pdf.calificacionCursante']);

//Ruta generar pdf de calificaciones docente
Route::post('imprimirCalificacionDocente',[
    'uses' => 'PdfController@calificacionDocente',
    'as'   => 'pdf.calificacionDocente']);

//************************* rutas docente *************

Route::get('calificarCursantes',[
    'uses' => 'DocenteController@calificar',
    'as'   => 'docente.calificar']);

Route::get('verCalificacionesCursantes',[
    'uses' => 'DocenteController@verCalificaciones',
    'as'   => 'docente.verCalificaciones']);



//*********************** rutas excel ****************
//preuba generar excel


Route::get('excel',[
    'uses' => 'ExcelController@generarExcel',
    'as'   => 'excel.generarExcel']);

Route::get('GuardarExcel',[
    'uses' => 'ExcelController@import',
    'as'   => 'excel.generarExcel']);


//Ruta para que el docente reciba plantilla de excel para llenar...direcciona al ExcelController
Route::post('darExcel',[
    'uses' => 'ExcelController@darExcel',
    'as'   => 'excel.darExcel']);


//Ruta para que el docente guarde notas...direcciona al ExcelController
Route::post('guardarNotas',[
    'uses' => 'ExcelController@guardarNotas',
    'as'   => 'excel.guardarNotas']);





//****************************prueba ******************

Route::get('alumno/{id}', [
    'uses'  => 'CursanteController@usuario',
    'as'    => 'usuario'
]);
//rutas del director
Route::get('nuevoCursante',[
    'uses' => 'PrincipalController@index',
    'as'   => 'nuevoCursante']);
Route::post('nuevoCursante',[
    'uses' => 'PrincipalController@store',
    'as'   => 'nuevoCursante']);

Route::get('nuevoDocente',[
    'uses' => 'PrincipalController@insDocente',
    'as'   => 'nuevoDocente']);
Route::post('nuevoDocente',[
    'uses' => 'PrincipalController@newDocente',
    'as'   => 'nuevoDocente']);

Route::get('modificarCursante',[
    'uses' => 'PrincipalController@mostrarCursantes',
    'as'   => 'modificarCursante']);
Route::get('editarCursante{id}',[
    'uses'  =>'PrincipalController@editarCursante',
    'as'    =>'editCursante'
]);
Route::put('actualizarCursante{id}',[
    'uses'  => 'PrincipalController@actualizarCursante',
    'as'    => 'upCursante'
]);

Route::get('modificarDocente',[
    'uses' => 'PrincipalController@mostrarDocentes',
    'as'   => 'modificarDocente']);
Route::get('editarDocente{id}',[
    'uses'  =>'PrincipalController@editarDocente',
    'as'    =>'editDocente'
]);
Route::put('actualizarDocente{id}',[
    'uses'  => 'PrincipalController@actualizarDocente',
    'as'    => 'upDocente'
]);


//PRUEBA DOMPDF
Route::get('pruebaPDF',[
    'uses' => 'PdfController@invoice',
    'as'   => 'pruebaPDF']);


//****************Rutas director************************




//Ruta para mostrar las materias para calificar al cursante
Route::get('calificarCursanteSelecMateria',[
    'uses' => 'PrincipalController@calificarCursanteSelecMateria',
    'as'   => 'director.calificarCursanteSelecMateria']);

//Ruta para seleccionar cursante y calificarlo
Route::post('calificarCursante',[
    'uses' => 'PrincipalController@calificarCursante',
    'as'   => 'director.calificarCursante']);

//Ruta para guardar calificacion al cursante
Route::post('formCalifCursante',[
    'uses' => 'PrincipalController@formCalifCursante',
    'as'   => 'director.formCalifCursante']);