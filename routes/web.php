<?php

use Illuminate\Support\Facades\Route;
use illuminate\Support\Facades\Auth;

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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);


Route::get('/manga', [App\Http\Controllers\ProductController::class, 'mangalist']);
Route::get('/lightnovel', [App\Http\Controllers\ProductController::class, 'lightnovellist']);


Route::get('/detail/{id}', [App\Http\Controllers\ProductController::class, 'detail']);
Route::post('/detail/{id}', [App\Http\Controllers\ProductController::class, 'addCart']);


Route::get('/dashboard/products', [\App\Http\Controllers\DashboardController::class, 'index'])->middleware('checklogin')->Middleware('checkadmin');


Route::get('/dashboard/products/{id}', [\App\Http\Controllers\DashboardController::class, 'changeProduct'])->middleware('checklogin')->Middleware('checkadmin');
Route::post('/dashboard/products/{id}', [\App\Http\Controllers\DashboardController::class, 'updateProduct'])->middleware('checklogin')->Middleware('checkadmin');


Route::get('/dashboard/addProduct', [\App\Http\Controllers\DashboardController::class, 'addproduct'])->middleware('checklogin')->Middleware('checkadmin');
Route::post('//dashboard/addProduct', [\App\Http\Controllers\dashboardController::class, 'saveProduct'])->middleware('checklogin')->Middleware('checkadmin');

Route::get('/dashboard/addAdmin', [\App\Http\Controllers\DashboardController::class, 'addAdminuser'])->middleware('checklogin')->Middleware('checkadmin');
Route::post('/dashboard/addAdmin', [\App\Http\Controllers\DashboardController::class, 'addAdmin'])->middleware('checklogin')->Middleware('checkadmin');

Route::get('/dashboard/addProductTag', [\App\Http\Controllers\DashboardController::class, 'productTags'])->middleware('checklogin')->Middleware('checkadmin');
Route::post('//dashboard/addProductTag', [\App\Http\Controllers\dashboardController::class, 'saveProductTag'])->middleware('checklogin')->Middleware('checkadmin');


Route::get('/');
Auth::routes();


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
