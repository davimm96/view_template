<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'showView']);
Route::get('/csrform', [MainController::class, 'csrform']);
Route::post('/submit', [MainController::class, 'submitForm'])->name('submit');
Route::post('/submit2', [MainController::class, 'submitForm2'])->name('submit2');

Route::get('/setSession', [MainController::class, 'setSession']);
Route::get('/clearSession', [MainController::class, 'clearSession']);
