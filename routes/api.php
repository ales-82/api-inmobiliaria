<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ViviendaController;
use App\Http\Controllers\PropiedadController;
/*Route::middleware(['api'])->group(function () {
    Route::post('/registro',[AuthController::class,'register']);
});*/

Route::post('/registro',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);
//Route::get('/viviendas',[ViviendaController::class,'index']);
Route::get('/viviendas',[PropiedadController::class,'index']);
Route::get('/vivienda/{id}', [PropiedadController::class,'show']);
/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');*/
