<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CarController::class, 'index'])->name('index');

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout.post');

Route::get('/dashboard/cars', [CarController::class, 'dashboard'])->name('dashboard.cars');
Route::delete('/dashboard/cars/{id}', [CarController::class, 'destroy'])->name('dashboard.cars.destroy');
Route::get('/dashboard/cars/{id}', [CarController::class, 'UpdateShow'])->name('dashboard.cars.edit');
Route::put('/dashboard/cars/{id}', [CarController::class, 'update'])->name('dashboard.cars.update');