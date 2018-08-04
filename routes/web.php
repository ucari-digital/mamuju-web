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

Route::get('/', 'Mobile\MobileIndexController@index');
Route::get('/kategori/{kategori}', 'Mobile\KategoriViewerController@index');
Route::get('/viewer/{kategori}/{kode_berita}', 'Mobile\BeritaViewerController@index');
Route::get('/u/{user}', 'Mobile\BeritaViewerController@user');

