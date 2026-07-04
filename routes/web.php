<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
 
Route::get('/', [MessageController::class, 'index'])->name('messages.index');
Route::post('/', [MessageController::class, 'store'])->name('messages.store');
Route::delete('/messages/{message}', [MessageController::class, 'destroy'])->name('messages.destroy');
Route::get('/about', [MessageController::class, 'about'])->name('about');
Route::get('/messages/{message}/edit', [MessageController::class, 'edit'])->name('messages.edit');
Route::put('/messages/{message}', [MessageController::class, 'update'])->name('messages.update');
