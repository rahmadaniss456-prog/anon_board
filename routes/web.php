<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
 
Route::get('/', [MessageController::class, 'index'])->name('messages.index');
Route::get('/about', [MessageController::class, 'about'])->name('about');
