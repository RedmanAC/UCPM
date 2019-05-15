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

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
Route::get('/', 'ProduktController@index');
Route::get('/produkt/{id}/', 'ProduktController@show');
Route::post('/produkt/','ProduktController@store');
Route::put('/produkt/{id}/','ProduktController@update');
Route::delete('/produkt/{id}/','ProduktController@delete');

Route::get('/arbeitszeiten/','ArbeitszeitenController@show');
Route::post('/arbeitszeiten/','ArbeitszeitenController@store');
=======
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/arbeitszeiten', 'WorkplanController@index');

Route::get('/lager', 'WarehouseController@index');

Route::get('/AUGM', 'ActivityController@index');

Route::post('/arbeitsplan', 'ActivityController@store');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> version1.1
