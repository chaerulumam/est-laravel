<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductStockController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
//     return view('app');
// });

Route::get('/', [DashboardController::class, 'index'])->middleware('auth');

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'store']);
Route::get('logout', [LoginController::class, 'logout']);        

Route::get('user', [UserController::class, 'index']);
Route::get('create-user', [UserController::class, 'create']);
Route::post('create-user', [UserController::class, 'store']);
Route::get('edit/{id}/user', [UserController::class, 'edit']);
Route::put('update/{id}', [UserController::class, 'update']);
Route::delete('delete/{id}', [UserController::class, 'destroy']);

Route::get('register', [RegisterController::class, 'index']);
Route::post('register', [RegisterController::class, 'create']);

Route::get('product', [ProductStockController::class, 'index']);
Route::post('add-product', [ProductStockController::class, 'store']);