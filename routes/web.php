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
Route::get('/barang', 'barangController@barangdag');
Route::get('/calculator', 'MainController@calculator');
Route::get('/kontak', 'MainController@kontak');
Route::get('/statistik', 'MainController@statistik');