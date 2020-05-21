<?php

use Illuminate\Support\Facades\Route;

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
Auth::routes();

Route::get('/home', 'MainController@index')->name('home');

Route::get('/barang', 'barangController@index');
Route::get('/barang/tambah','barangController@tambah');
Route::get('/barang/store','barangController@store');
Route::get('/barang/edit','barangController@edit');
Route::get('/barang/update','barangController@update');
Route::get('/barang/hapus','barangController@hapus');

Route::get('/calculator', 'MainController@calculator');
Route::get('/kontak', 'MainController@kontak');
Route::get('/statistik', 'MainController@statistik');