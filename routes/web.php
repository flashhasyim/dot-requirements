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

Route::get('search/{type}','Api\Localization@search');
Route::get('rajaongkir/{type}','Api\Rajaongkir@search');

Route::get('/logic','Logic@quick')->name('logic.quick');
Route::get('/shipping','Shipping@index')->name('shipping.index');