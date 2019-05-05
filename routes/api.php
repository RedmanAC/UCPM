<?php

use Illuminate\Http\Request;

//Produkt
Route::get('/produkt/', 'ProduktController@index');
Route::get('/produkt/{id}/', 'ProduktController@show');
Route::post('/produkt/', 'ProduktController@store');
Route::put('/produkt/{id}/', 'ProduktController@update');
Route::delete('/produkt/{id}/','ProduktController@delete');

//Arbeitszeiten
Route::get('/arbeitszeiten/{id}/', 'ArbeitszeitenController@show');
Route::post('/arbeitszeiten/','ArbeitszeitenController@store');
