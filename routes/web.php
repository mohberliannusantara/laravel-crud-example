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

Route::get('/', 'BerandaController@index');

// Route Jurusan
Route::get('/jurusan', 'JurusanController@index');
Route::get('/jurusan/create', 'JurusanController@create');
Route::post('/jurusan', 'JurusanController@store');
Route::get('/jurusan/{id}/edit', 'JurusanController@edit');
Route::put('/jurusan/{id}', 'JurusanController@update');
Route::delete('/jurusan/{id}', 'JurusanController@destroy');

// Route Siswa
Route::get('/siswa', 'SiswaController@index');
Route::get('/siswa/create', 'SiswaController@create');
Route::post('/siswa', 'SiswaController@store');
Route::get('/siswa/{id}/edit', 'SiswaController@edit');
Route::put('/siswa/{id}', 'SiswaController@update');
Route::delete('/siswa/{id}', 'SiswaController@destroy');