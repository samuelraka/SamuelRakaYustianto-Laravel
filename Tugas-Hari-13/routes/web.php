<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;

Route::get('/', function () {
    return view('table');
})->name('table');

Route::get('/datatable',[ContentController::class,'datatable'])->name('datatable');