<?php

use App\Http\Controllers\ApiController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/products/",[ApiController::class,'getProducts']);
Route::get("/products/{q}",[ApiController::class,'getSpecificproducts']);

Route::get("/manga/",[ApiController::class,'getManga']);
Route::get("/manga/{q}",[ApiController::class,'getSpecificManga']);

Route::get("/lightnovel/",[ApiController::class,'getLightnovel']);
Route::get("/lightnovel/{q}",[ApiController::class,'getSpecificLightnovel']);
