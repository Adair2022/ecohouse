<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::Apiresource('usuarios',ClassroomsController::class); 
Route::Apiresource('tipo_usuario',DirectionsController::class); 
Route::Apiresource('ubicacion',ReportsController::class); 
Route::Apiresource('deposito',TypeofusersController::class); 
Route::Apiresource('sensor',UsersController::class); 
Route::Apiresource('requisitos',UsersController::class);