<?php

use App\Http\Controllers\ArticlesController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum', 'web',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [ArticlesController::class,'index']
    )->name('dashboard');
    Route::get('/articles', [ArticlesController::class, 'index'])->name('articles');
    Route::get('/create/article', [ArticlesController::class, 'create'])->name('create');
    Route::post('/create/article', [ArticlesController::class, 'store']);
    Route::post('/article/{article}/edit', [ArticlesController::class, 'edit'])->name('edit');
    Route::post('/article/{article}', [ArticlesController::class, 'show'])->name('show');
});




