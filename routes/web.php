<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/contact', [ContactController::class, 'create']);
Route::post('/contact', [ContactController::class, 'store']);
Route::get('/success', function () {
    return view('success');
})->name('success');
Route::get('/messages', [MessageController::class, 'index']);
Route::get('/messages/{id}/delete', [MessageController::class, 'delete']);
Route::get('/messages/{id}/show', [MessageController::class, 'show']);

