<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

// Página de inicio
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rutas de autenticación
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login.post');
Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// Rutas protegidas (requieren autenticación)
Route::middleware(['auth'])->group(function () {

    // Rutas de posts
    Route::resource('posts', PostController::class)->except(['destroy']);

    // Ruta para eliminar posts
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

    // Rutas de comentarios dentro de posts
    Route::prefix('posts/{post}/comments')->group(function () {
        Route::get('/create', [CommentController::class, 'create'])->name('comments.create');
        Route::post('/', [CommentController::class, 'store'])->name('comments.store');
    });
});

// Redirección tras cerrar sesión
Route::get('/logout-redirect', function () {
    return view('auth.logout_redirect');
})->name('logout.redirect');
