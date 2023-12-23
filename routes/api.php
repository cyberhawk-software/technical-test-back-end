<?php

use App\Http\Controllers\ComponentController;
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

// Farms
Route::prefix('farms')->group(function () {
    Route::get('/', [FarmController::class, 'index'])->name('all');
    Route::get('/{farm}', [FarmController::class, 'show'])->name('show');
    Route::get('/{farm}/turbines', [FarmController::class, 'getTurbines'])->name('turbines.all');
});

// Turbines
Route::prefix('turbines')->group(function() {
    Route::get('/', [TurbineController::class, 'index'])->name('turbines.all');
});

// Components
Route::prefix('components')->group(function() {
    Route::get('/', [ComponentController::class, 'index'])->name('all');
});