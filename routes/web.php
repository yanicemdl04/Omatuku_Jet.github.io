<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/propos', [PageController::class, 'propos'])->name('propos');
Route::get('/service', [PageController::class, 'service'])->name('service');
Route::get('/agence', [PageController::class, 'agence'])->name('agence');
Route::get('/cargo', [PageController::class, 'cargo'])->name('cargo');
Route::get('/jet', [PageController::class, 'jet'])->name('jet');
Route::get('/formation', [PageController::class, 'formation'])->name('formation');




