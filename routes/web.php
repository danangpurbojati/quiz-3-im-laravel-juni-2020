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
    return view('home');
});

Route::get('/artikel', 'ArtikelController@index'); // menampilkan halaman artikel
Route::get('/artikel/create', 'ArtikelController@create'); // menambah data
Route::post('/artikel', 'ArtikelController@store'); // menyimpan data
Route::get('/artikel/{article}', 'ArtikelController@show'); // menampilkan detail item dengan id 
Route::get('/artikel/{article}/edit', 'ArtikelController@edit'); // menampilkan form untuk edit item
Route::put('/artikel/{article}', 'ArtikelController@update'); // menyimpan perubahan dari form edit
Route::delete('/artikel/{article}', 'ArtikelController@destroy'); // menghapus data dengan id