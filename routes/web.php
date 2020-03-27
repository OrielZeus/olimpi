<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is| where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

*/
Route::get('quienessomos', 'QuienesController@index')->name('quienes');
Route::get('marcas', 'MarcaController@index')->name('marcas');
Route::get('productos', 'ProductosController@index')->name('productos');
Route::get('contacto', 'ContactoController@index')->name('contacto');
Route::get('inicio', 'InicioController@index')->name('inicio');
Route::get('/', function () {
	$in='ini';
    return view('inicio',compact('in'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
