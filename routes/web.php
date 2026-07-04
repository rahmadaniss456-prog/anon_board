<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
 
Route::get('/', [MessageController::class, 'index'])->name('messages.index');
Route::get('/about', [MessageController::class, 'about'])->name('about');
Route::post('/', [MessageController::class, 'store'])->name('messages.store');
Route::delete('/messages/{message}', [MessageController::class, 'destroy'])->name('messages.destroy');