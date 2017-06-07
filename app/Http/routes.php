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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/alumnos',[
  'uses' => 'StudentController@index',
   'as'  => 'alumnos_index_path'
]);

Route::get('/alumnos/{id}',[
  'uses' => 'StudentController@show',
   'as'  => 'alumnos_show_path'
]);

Route::post('/calificacion/nueva',[
  'uses' => 'QualificationsController@create',
   'as'  => 'calificacion_create_path'
]);

Route::put('/calificacion/actualizar',[
  'uses' => 'QualificationsController@update',
   'as'  => 'calificacion_update_path'
]);

Route::delete('/calificacion/{id}',[
  'uses' => 'QualificationsController@destroy',
   'as'  => 'calificacion_destroy_path'
]);
