<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'InstansiController@index');
Route::get('/create', 'InstansiController@create');
Route::post('/store', 'InstansiController@store');
Route::get('/show/{instansi}', 'InstansiController@show');
Route::get('/edit/{instansi}', 'InstansiController@edit');
Route::put('/update/{instansi}', 'InstansiController@update');
Route::delete('/destroy/{instansi}', 'InstansiController@destroy');
