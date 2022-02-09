<?php

use App\Http\Controllers\IncidenciaController;
use App\Models\Incidencia;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('layout');
});


//Metería todas las rutas asociadas al controlador resource
//https://laravel.com/docs/8.x/controllers#restful-partial-resource-routes
Route::resource('/incidencias', IncidenciaController::class);

Route::get('/incidencias/delete/{incidencia}', [IncidenciaController::class, 'destroy']);
Route::post('/incidencias/busqueda', [IncidenciaController::class, 'busqueda']);
Route::post('/incidencias/{incidencia}', [IncidenciaController::class, 'update']);


