<?php

use App\Http\Controllers\AverageController;
use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/gas-consumption-form', [CarController::class, 'showForm'])->name('gas-consumption-form');
Route::post('/calculate-gas-consumption', [CarController::class, 'calculateGasConsumption'])->name('calculate-gas-consumption');
