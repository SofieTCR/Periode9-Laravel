<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\Admin as Admin;
use App\http\Controllers\Open as Open;
use App\http\Controllers\Admin as AdminProject;
use App\http\Controllers\Open as OpenProject;

Route::get('/', function () {
    return view('layouts.layoutpublic');
    // return view('welcome');
})->name('home');

Route::get("/admin", function () {
    return view('layouts.layoutadmin');
})->name('admin');

Route::group(['middleware' => ['role:sales:admin']],function () {
    Route::get('/admin/categories/{category}/delete', [Admin\CategoryController::class, 'delete'])->name('categories.delete');
    Route::get('categories', [Open\CategoryController::class, 'index'])->name('categories.index');
    Route::resource('/admin/categories', Admin\CategoryController::class);
});
Route::group(['middleware' => ['role:teacher:admin']],function () {
    Route::get('/admin/projects/{project}/delete', [ProjectController::class, 'delete'])->name('projects.delete');
    Route::get('projects', [OpenProject\ProjectController::class, 'index'])->name('open.projects.index');
    Route::resource('/admin/projects', \App\Http\Controllers\Admin\ProjectController::class);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
