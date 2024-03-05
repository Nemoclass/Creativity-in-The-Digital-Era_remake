<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PameranController;

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

Route::get('/', [PameranController::class, 'index'])->name('index');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::prefix('process')->group(function () {
    Route::post('/login', [AuthController::class, 'check__login'])->name('check-login');
    Route::post('/store-users', [AuthController::class, 'store__users'])->name('store-users');
});


Route::middleware(['auth',])->group(function () {
    
    Route::get('/games/{id}', [PameranController::class, 'game'])->name('game');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::middleware(['auth' , 'role:admin'])->group(function () {
         Route::prefix('admin')->group(function () {
            Route::get('/dashboard', [AdminController::class, 'index'])->name('admin-index');
            Route::post('/store-game', [AdminController::class, 'store__game'])->name('admin-store-game');
            Route::post('/store-team', [AdminController::class, 'store__team'])->name('admin-store-team');
            Route::post('/store-siswa', [AdminController::class, 'store__siswa'])->name('admin-store-siswa');
        });
    });

});
