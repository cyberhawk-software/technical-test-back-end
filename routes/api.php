<?php

use App\Http\Controllers\FarmController;
use App\Http\Controllers\TurbineController;
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

Route::get('/farms', [FarmController::class, 'index'])->name('farms.all');
Route::get('/turbines', [TurbineController::class, 'index'])->name('turbines.all');
