<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProductosController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('productos',[ProductosController::class,'index']);
Route::post('productos',[ProductosController::class,'store']);
Route::put('productos/{producto}',[ProductosController::class,'update']);
Route::get('productos/{producto}',[ProductosController::class,'show']);
Route::delete('productos/{producto}',[ProductosController::class,'destroy']);