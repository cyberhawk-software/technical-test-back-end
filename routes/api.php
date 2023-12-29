<?php

use App\Http\Controllers\ComponentController;
use App\Http\Controllers\ComponentTypeController;
use App\Http\Controllers\FarmController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\GradeTypeController;
use App\Http\Controllers\InspectionController;
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
Route::name('farms.')->prefix('farms')->group(function () {
    Route::get('/', [FarmController::class, 'index'])->name('all');
    Route::get('/{farmID}', [FarmController::class, 'show'])->name('show');
    Route::get('/{farmID}/turbines', [FarmController::class, 'getTurbines'])->name('turbines.all');
    Route::get('/{farmID}/turbines/{turbineID}', [FarmController::class, 'getTurbine'])->name('turbines.get');
});

// Turbines
Route::name('turbines.')->prefix('turbines')->group(function() {
    Route::get('/', [TurbineController::class, 'index'])->name('all');
    Route::get('/{turbineID}', [TurbineController::class, 'show'])->name('show');
    Route::get('/{turbineID}/components', [TurbineController::class, 'getComponents'])->name('components.all');
    Route::get('/{turbineID}/components/{componentID}', [TurbineController::class, 'getComponent'])->name('component.get');
    Route::get('/{turbineID}/inspections', [TurbineController::class, 'getInspections'])->name('inspections.all');
    Route::get('/{turbineID}/inspections/{inspectionID}', [TurbineController::class, 'getInspection'])->name('inspection.get');
});

// Components
Route::name('components.')->prefix('components')->group(function() {
    Route::get('/', [ComponentController::class, 'index'])->name('all');
    Route::get('/{componentID}', [ComponentController::class, 'show'])->name('show');
    Route::get('/{componentID}/grades', [ComponentController::class, 'getGrades'])->name('grades.all');
    Route::get('/{componentID}/grades/{gradeID}', [ComponentController::class, 'getGrade'])->name('grade.get');
});

// Inspections
Route::name('inspections.')->prefix('inspections')->group(function() {
    Route::get('/', [InspectionController::class, 'index'])->name('all');
    Route::get('/{inspectionID}', [InspectionController::class, 'show'])->name('show');
    Route::get('/{inspectionID}/grades', [InspectionController::class, 'getGrades'])->name('grades.all');
    Route::get('/{inspectionID}/grades/{gradeID}', [InspectionController::class, 'getGrade'])->name('grade.get');
});

// Grades
Route::name('grades.')->prefix('grades')->group(function() {
    Route::get('/', [GradeController::class, 'index'])->name('all');
    Route::get('/{gradeID}', [GradeController::class, 'show'])->name('show');
});

// Component Types
Route::name('component.types.')->prefix('component-types')->group(function() {
    Route::get('/', [ComponentTypeController::class, 'index'])->name('all');
    Route::get('/{componentType}', [ComponentTypeController::class, 'show'])->name('show');
});

// Grade Types
Route::name('grade.types')->prefix('grade-types')->group(function() {
    Route::get('/', [GradeTypeController::class, 'index'])->name('all');
    Route::get('/{gradeType}', [GradeTypeController::class, 'show'])->name('show');
});
