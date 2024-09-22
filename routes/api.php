<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConfiguracionController;
use App\Http\Controllers\MotivoController;
use App\Http\Controllers\AusenciaController;
use App\Http\Controllers\AutenticacionController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\DatoPersonalController;
use App\Http\Controllers\EmpladoController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\HoraTrabajadaController;
use App\Http\Controllers\InformeController;
use App\Http\Controllers\NotificacionController;
use App\Http\Controllers\PermisoController;
use App\Http\Controllers\RegistroDiarioController;
use App\Models\Permiso;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user',

 function (Request $request) {
    return $request->user();
});
// Route::get('/configuracion/data', [ConfiguracionController::class, 'getData']);
// Route::post('/configuracion/save', [ConfiguracionController::class, 'save']);
// Route::put('/configuracion/update', [ConfiguracionController::class, 'update']);
// Route::delete('/configuracion/delete', [ConfiguracionController::class, 'delete']);


Route::controller(ConfiguracionController::class)-> group(function () {
    Route::get('/configuracion/data', 'getData');
    Route::post('/configuracion/save',  'save');
    Route::put('/configuracion/update', 'update');
    Route::delete('/configuracion/delete', 'delete');
});

Route::controller(MotivoController::class)-> group(function () {
    Route::get('/motivo/data', 'getData');
    Route::post('/motivo/save',  'save');
    Route::put('/motivo/update', 'update');
    Route::delete('/motivo/delete', 'delete');
});

Route::controller(AusenciaController::class)-> group(function () {
    Route::get('/ausencia/data', 'getData');
    Route::post('/ausencia/save',  'save');
    Route::put('/ausencia/update', 'update');
    Route::delete('/ausencia/delete', 'delete');
});

Route::controller(AutenticacionController::class)-> group(function () {
    Route::get('/autenticacion/data', 'getData');
    Route::post('/autenticacion/save',  'save');
    Route::put('/autenticacion/update', 'update');
    Route::delete('/autenticacion/delete', 'delete');
});

Route::controller(CargoController::class)-> group(function () {
    Route::get('/cargo/data', 'getData');
    Route::post('/cargo/save',  'save');
    Route::put('/cargo/update', 'update');
    Route::delete('/cargo/delete', 'delete');
});

Route::controller(ContactoController::class)-> group(function () {
    Route::get('/contacto/data', 'getData');
    Route::post('/contacto/save',  'save');
    Route::put('/contacto/update', 'update');
    Route::delete('/contacto/delete', 'delete');
});

Route::controller(DatoPersonalController::class)-> group(function () {
    Route::get('/datopersona/data', 'getData');
    Route::post('/datopersona/save',  'save');
    Route::put('/datopersona/update', 'update');
    Route::delete('/datopersona/delete', 'delete');
});

Route::controller(EmpladoController::class)-> group(function () {
    Route::get('/empleado/data', 'getData');
    Route::post('/empleado/save',  'save');
    Route::put('/empleado/update', 'update');
    Route::delete('/empleado/delete', 'delete');
});

Route::controller(HorarioController::class)-> group(function () {
    Route::get('/horario/data', 'getData');
    Route::post('/horario/save',  'save');
    Route::put('/horario/update', 'update');
    Route::delete('/horario/delete', 'delete');
});

Route::controller(HoraTrabajadaController::class)-> group(function () {
    Route::get('/horatrabajada/data', 'getData');
    Route::post('/horatrabajada/save',  'save');
    Route::put('/horatrabajada/update', 'update');
    Route::delete('/horatrabajada/delete', 'delete');
});

Route::controller(InformeController::class)-> group(function () {
    Route::get('/informe/data', 'getData');
    Route::post('/informe/save',  'save');
    Route::put('/informe/update', 'update');
    Route::delete('/informe/delete', 'delete');
});

Route::controller(NotificacionController::class)-> group(function () {
    Route::get('/notificacion/data', 'getData');
    Route::post('/notificacion/save',  'save');
    Route::put('/notificacion/update', 'update');
    Route::delete('/notificacion/delete', 'delete');
});
Route::controller(PermisoController::class)-> group(function () {
    Route::get('/permiso/data', 'getData');
    Route::post('/permiso/save',  'save');
    Route::put('/permiso/update', 'update');
    Route::delete('/permiso/delete', 'delete');
});

Route::controller(RegistroDiarioController::class)-> group(function () {
    Route::get('/registro/data', 'getData');
    Route::post('/registro/save',  'save');
    Route::put('/registro/update', 'update');
    Route::delete('/registro/delete', 'delete');
});