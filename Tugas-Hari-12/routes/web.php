<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('home');
});

Route::get('/register',[AuthController::class,'index'])->name('register');
Route::get('/welcome',[AuthController::class,'welcome'])->name('welcome');
Route::post('/register', [AuthController::class, 'postRegister'])->name('postRegister');
Route::get('/home',[HomeController::class, 'index'])->name('home');
