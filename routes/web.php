<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route Login...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

//Route Dasbor Admin
Route::get('/', 'DasborController@index');
Route::get('/dasbor/{id}/ubah', 'DasborController@edit');
Route::patch('/dasbor/{id}', 'DasborController@update');

//Route Siswa
Route::get('/siswa/nis', 'SiswaController@cekNis');
Route::resource('siswa', 'SiswaController', ['except' => ['show']]);

//Route Poin
Route::resource('poin', 'PoinController', ['except' => ['create', 'store', 'destroy']]);

//Route Peraturan
Route::get('/peraturan/kode', 'PeraturanController@cekKode');
Route::resource('peraturan', 'PeraturanController');

//Route User
Route::resource('user', 'UserController');

//Route Profil
Route::get('/profil', 'ProfilController@edit');
Route::post('/profil', 'ProfilController@update');
Route::post('/profilpass', 'ProfilController@updatepass');
