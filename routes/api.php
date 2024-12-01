<?php

use App\Http\Controllers\MedicinaApiController;
use App\Http\Controllers\DoctoresApiController;
use App\Http\Controllers\EspecialidadesApiController;
use App\Http\Controllers\PacientesApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get( '/medicinas', [ MedicinaApiController::class, 'index' ] );
Route::get( '/medicinas/{id}', [ MedicinaApiController::class, 'show' ] );
Route::post( '/medicinas', [ MedicinaApiController::class, 'store' ] );
Route::delete( '/medicinas/{id}', [ MedicinaApiController::class, 'destroy' ] );
Route::put( '/medicinas/{id}', [ MedicinaApiController::class, 'update' ] );

Route::get( '/doctores', [ DoctoresApiController::class, 'index' ] );
Route::get( '/doctores/{id}', [ DoctoresApiController::class, 'show' ] );
Route::post( '/doctores', [ DoctoresApiController::class, 'store' ] );
Route::delete( '/doctores/{id}', [ DoctoresApiController::class, 'destroy' ] );
Route::put( '/doctores/{id}', [ DoctoresApiController::class, 'update' ] );

Route::get( '/especialidades', [ EspecialidadesApiController::class, 'index' ] );
Route::get( '/pacientes', [ PacientesApiController::class, 'index' ] );
