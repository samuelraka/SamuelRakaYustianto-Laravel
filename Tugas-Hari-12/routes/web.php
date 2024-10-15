<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/register',[AuthController::class,'index'])->name('register');
Route::get('/welcome',[AuthController::class,'welcome'])->name('welcome');
Route::post('/register', [AuthController::class, 'postRegister'])->name('postRegister');
