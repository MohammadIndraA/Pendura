<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DomisiliController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\UdaraController;
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

Route::get('/', [FrontController::class, 'index'])->middleware('guest');
Route::get('/login', [UserController::class, 'index'])->name('login')->middleware('guest');
Route::get('/login/store', [UserController::class, 'store'])->name('login.store');
Route::middleware('auth')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/logout', [UserController::class, 'logout']);
    Route::resource('/udara' , UdaraController::class);
    Route::get('/udara-store' , [UdaraController::class, 'store']);
});
// Route::resource('/tempat', DomisiliController::class);
