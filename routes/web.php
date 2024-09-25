<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\Admin\CategoryController;
use App\http\Controllers\Admin\ProjectController;

Route::get('/', function () {
    // return view('layouts.layoutadmin');
    return view('welcome');
});

Route::get("/admin", function () {
    return view('layouts.layoutadmin');
});

Route::resource('/admin/categories', \App\Http\Controllers\Admin\CategoryController::class);
Route::resource('/admin/projects', \App\Http\Controllers\Admin\ProjectController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
