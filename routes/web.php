<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('index');
});
Route::get('index', [ContactController::class, 'index'])->name('index');
Route::post('store', [ContactController::class, 'store'])->name('store');
