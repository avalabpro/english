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

Route::get('lessons', function() {
   return view('lessons');
})->name('lessons');

Route::get('mortal', function() {
    return view('mortal');
})->name('mortal');

Route::get('generate', 'GenerateController@index')->name('generate');

Route::post('generate', 'GenerateController@generate')->name('ajax.generate');