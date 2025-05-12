<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ViviendaController;

/*Route::middleware(['api'])->group(function () {
    Route::post('/registro',[AuthController::class,'register']);
});*/

Route::post('/registro',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);
Route::get('/viviendas',[ViviendaController::class,'index']);
/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');*/
