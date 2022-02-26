<?php

use App\Models\Order;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RecapitulationController;

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

Route::get('/', [DashboardController::class, 'index'])->middleware('auth');

Route::delete('/order/clear', [OrderController::class, 'clear'])->middleware('auth');

Route::resource('/order', OrderController::class)->middleware('auth');
Route::resource('/stock', StockController::class)->middleware('auth');
Route::resource('/supplier', SupplierController::class)->middleware('auth');
Route::resource('/recapitulation', RecapitulationController::class)->middleware('auth');
Route::resource('/user', UserController::class)->middleware('auth');

Route::resource('/login', LoginController::class)->middleware('guest');
Route::resource('/register', RegisterController::class)->middleware('guest');

Route::get('/recapitulation/print', [RecapitulationController::class, 'print'])->middleware('auth');

Route::get('/order', [OrderController::class, 'index'])->name('order');
Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');
