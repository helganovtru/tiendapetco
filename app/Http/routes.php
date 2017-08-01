<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/login', 'HomeController@index');

Route::get('/homeadmin', function () {
    return view('homeadmin');
});
Route::get('/mostrarDetalle/{id}','tiendaController@mostrarDet');
Route::get('/catalogoProd','tiendaController@cargarCat');
Route::get('/registrarAdmin','tiendaController@registrarAdmin');
Route::get('/homecliente','tiendaController@homeCliente');
Route::get('/registrarProd','tiendaController@registrarProd');
Route::get('/registrarCat', 'tiendaController@registrarCat');
Route::get('/registrarCli','tiendaController@registrarCli');
Route::get('/registrarme','tiendaController@registrarCliente');

Route::post('/guardarAdmin', 'tiendaController@guardarAdmin');
Route::post('/guardarProd','tiendaController@guardarProd');
Route::post('/guardarCli','tiendaController@guardarCli');
Route::post('/guardarCliente','tiendaController@guardarCliente');
Route::post('/guardarCat','tiendaController@guardarCat');

Route::get('/consultarAdmin', 'tiendaController@consultarAdmin');
Route::get('/consultarProd','tiendaController@consultarProd');
Route::get('/consultarCat', 'tiendaController@consultarCat');
Route::get('/consultarCli', 'tiendaController@consultarCli');

Route::get('/eliminarAdmin/{id}', 'tiendaController@eliminarAdmin');
Route::get('/eliminarProd/{id}', 'tiendaController@eliminarProd');
Route::get('/eliminarCat/{id}', 'tiendaController@eliminarCat');
Route::get('/eliminarCli/{id}', 'tiendaController@eliminarCli');

Route::get('/editarAdmin/{id}', 'tiendaController@editarAdmin');
Route::get('/editarProd/{id}','tiendaController@editarProd');
Route::get('/editarCat/{id}', 'tiendaController@editarCat');
Route::get('/editarCli/{id}','tiendaController@editarCli');

Route::post('/actualizarAdmin/{id}','tiendaController@actualizarAdmin');
Route::post('/actualizarProd/{id}','tiendaController@actualizarProd');
Route::post('/actualizarCat/{id}','tiendaController@actualizarCat');
Route::post('/actualizarCli/{id}','tiendaController@actualizarCli');
Route::auth();

