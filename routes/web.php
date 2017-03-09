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

Route::get('/login', 'LoginController@login');

Route::post('/login', 'LoginController@postLogin');

Route::post('/register', 'LoginController@postRegister');

Route::post('/logout', 'LoginController@logout');

Route::get('/dashboard/statistik', function () {
    return view('dashboard.statistik');
});

Route::get('/dashboard/laporan', function () {
    return view('dashboard.laporan');
});

Route::get('/penduduk/wilayah', function () {
    return view('penduduk.wilayah');
});
