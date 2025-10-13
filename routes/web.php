<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\ArmadaController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('dashboard.dashboard');
})->name('dashboard');

Route::prefix('app')->group(function () {
    Route::resource('driver', DriverController::class);
    Route::resource('armadas', ArmadaController::class);
    Route::resource('customers', CustomerController::class);
    Route::resource('orders', OrderController::class);
});
