<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\CastController;

Route::get('/', function () {
    return view('table');
})->name('table');

Route::get('/cast',[CastController::class,'index'])->name('index');
Route::get('/cast/create',[CastController::class,'create'])->name('create');
Route::post('/cast',[CastController::class,'store'])->name('store');
Route::get('/cast/{id}/show',[CastController::class,'show'])->name('show');
Route::get('/cast/{id}/edit',[CastController::class,'edit'])->name('edit');
Route::put('/cast/{id}',[CastController::class,'update'])->name('update');
Route::delete('/cast/{id}/delete',[CastController::class,'destroy'])->name('destroy');
Route::get('/datatable',[ContentController::class,'datatable'])->name('datatable');