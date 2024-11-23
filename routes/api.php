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
Route::get( '/doctores', [ DoctoresApiController::class, 'index' ] );
Route::get( '/especialidades', [ EspecialidadesApiController::class, 'index' ] );
Route::get( '/pacientes', [ PacientesApiController::class, 'index' ] );
