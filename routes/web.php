<?php

use App\Http\Controllers\DatosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\TipoUsuarioController;
use App\Http\Controllers\SensorController;
use App\Http\Controllers\DepositoController;
use App\Http\Controllers\SurcosController;
use App\Http\Controllers\RequerimientosController;
use App\Http\Controllers\EstadosController;
use App\Http\Controllers\PlantasController;
use App\Http\Controllers\UbicacionController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

//RUTAS PROYECTO
Route::resource('usuarios', UsuariosController::class);
Route::resource('t_usuario', TipoUsuarioController::class);
Route::resource('ubicacion',UbicacionController::class);
Route::resource('invernadero', DepositoController::class);
Route::resource('sensor', SensorController::class);
Route::resource('plantas', PlantasController::class);
Route::resource('surcos', SurcosController::class);
Route::resource('requisitos', RequerimientosController::class);

Route::name('container')->get('/', [DatosController::class, 'index']);
//
Route::resource('estados',EstadosController::class);
Route::resource('municipios',MunicipiosController::class);
Route::name('registro')->get('registro', [UserController::class, 'registro']);
Route::name('js_municipios')->get('js_municipios', [EstadosController::class, 'js_municipios']);



