<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*

metodo original y anomimo

Route::get('/', function () {
    return view('welcome');
});

*/
/*Al llamar el controlador se hace de la siguiente manera*/

Route::get('/', 'TestController@welcome');
Route::get('/prueba', 'TestController@welcome2');

/*
llamar una cadena

Route::get('/prueba', function () {
    return 'Hola hermis';
});

*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
