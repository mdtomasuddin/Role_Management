<?php

use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';



Route::get('role',[RoleController::class,'index'])->middleware('auth');
Route::get('admin-only',[RoleController::class,'OnlyForAdmin'])->middleware(['auth','can:admin']);
Route::get('editor-only',[RoleController::class,'OnlyForEditor'])->middleware(['auth','can:editor']);
Route::get('author-only',[RoleController::class,'OnlyForAuthor'])->middleware(['auth','can:author']);

Route::get('secret',[RoleController::class,'secretMessage'])->middleware(['auth','can:secret']);
