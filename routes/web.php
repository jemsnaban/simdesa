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
Route::post('/logout', 'LoginController@logout');

Route::group(['middleware' => 'visitors'], function ()
{
    Route::get('/login', 'LoginController@login');
    Route::post('/login', 'LoginController@postLogin');
    Route::get('/register', 'LoginController@register');
    Route::post('/register', 'LoginController@postRegister');
});

Route::group(['middleware' => ['superadmin']], function ()
{
    Route::get('/dashboard/statistik', 'DashboardController@statistik');
    Route::get('/dashboard/laporan', 'DashboardController@laporan');

    //crud wilayah dusun
    Route::get('/penduduk/wilayah', 'DusunController@index');
    Route::get('/penduduk/wilayah/dusun/create', 'DusunController@create');
    Route::post('/penduduk/wilayah/dusun/create', 'DusunController@store');
    Route::get('/penduduk/wilayah/dusun/edit/{id}', 'DusunController@edit');
    Route::put('/penduduk/wilayah/dusun/edit/{id}', 'DusunController@update');

    //crud keluraga
    Route::get('/penduduk/keluarga', 'KeluargaController@index');
    Route::get('/penduduk/keluarga/create', 'KeluargaController@create');
    Route::post('/penduduk/keluarga/create', 'KeluargaController@store');
    Route::get('/penduduk/keluarga/edit/{id}', 'KeluargaController@edit');
    Route::put('/penduduk/keluarga/edit/{id}', 'KeluargaController@update');
});
