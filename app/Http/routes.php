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

Route::get('/', function () {
    return view('home');
});
//Route::get('/ejemplo', function () {
  //  return view('ejemplo');
//});
Route::get('/ejemplo','ejemploController@index');

Route::get('/registrarEncargado','proyectosController@registrarEnc');
Route::get('/registrarProyecto','proyectosController@registrarPro');
Route::get('/registrarPuesto', 'proyectosController@registrarPto');
Route::get('/registrarRecurso','proyectosController@registrarRec');

Route::post('/guardarEncargado', 'proyectosController@guardarEnc');
Route::post('/guardarProyecto','proyectosController@guardarPro');
Route::post('/guardarPuesto','proyectosController@guardarPto');
Route::post('/guardarRecurso','proyectosController@guardarRec');

Route::get('/consultarEncargados', 'proyectosController@consultarEnc');
Route::get('/consultarProyectos','proyectosController@consultarPro');
Route::get('/consultarPuestos', 'proyectosController@consultarPto');
Route::get('/consultarRecursos', 'proyectosController@consultarRec');

Route::get('/eliminarEncargado/{id}', 'proyectosController@eliminarEnc');
Route::get('/eliminarProyecto/{id}', 'proyectosController@eliminarPro');
Route::get('/eliminarPuesto/{id}', 'proyectosController@eliminarPto');
Route::get('/eliminarRecurso/{id}', 'proyectosController@eliminarRec');

Route::get('/editarEncargado/{id}', 'proyectosController@editarEnc');
Route::get('/editarProyecto/{id}','proyectosController@editarPro');
Route::get('/editarPuesto/{id}', 'proyectosController@editarPto');
Route::get('/editarRecurso/{id}','proyectosController@editarRec');

Route::post('/actualizarEncargado/{id}','proyectosController@actualizarEnc');
Route::post('/actualizarProyecto/{id}','proyectosController@actualizarPro');
Route::post('/actualizarPuesto/{id}','proyectosController@actualizarPto');
Route::post('/actualizarRecurso/{id}','proyectosController@actualizarRec');

Route::get('/proyectosPDF','proyectosController@pdfPro');
Route::get('/encargadosPDF','proyectosController@pdfEnc');
Route::get('/recursosPDF','proyectosController@pdfRec');
Route::get('/puestosPDF','proyectosController@pdfPto');

Route::get('/agregarRecursos/{id}','proyectosController@agregarRec');

Route::post('/guardarAsignacion/{id}','proyectosController@guardarAsignacion');
Route::get('/eliminarAsignacion/{idr}/{idp}','proyectosController@eliminarAsignacion');
Route::get('/recursosproyectosPDF/{id}','proyectosController@pdfProRec');