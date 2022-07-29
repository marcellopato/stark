<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index'])->name('user.index');
Route::get('/create', [UserController::class, 'create'])->name('user.create');
Route::post('/store', [UserController::class, 'store'])->name('user.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
