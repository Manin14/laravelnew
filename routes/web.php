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

// saya buat route baru, sendiri
Route::get('tentang-kami', function () {
    return view('tentang_kami');
});

// route baru
Route::get('/client','KlayenController@klayen');


// route baru
Route::get('/portofolio/','KlayenController@porto');

// route create data
Route::get('/portofolio/create','KlayenController@buat');

// halaman input data
// Route::post('/portofolio','KlayenController@store');


// route create data
Route::get('/artikel/create','ArticleController@buat');

// buat route untuk save data
Route::post('/portofolio','KlayenController@store');

// buat route untuk edit data
Route::get('/portofolio/{id}/edit','KlayenController@edit');

// route update
Route::put('/portofolio/{id}','KlayenController@update');

// route hapus
Route::delete('/portofolio/{id}','KlayenController@destroy');