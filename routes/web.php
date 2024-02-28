<?php

use App\Http\Controllers\PameranController;
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

Route::get('/', [PameranController::class, 'index'])->name('index');
Route::get('/rplexhibition', [PameranController::class, 'index'])->name('index');
Route::get('/games', [PameranController::class, 'game'])->name('game');
