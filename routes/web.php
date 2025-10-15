<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/membership', [PageController::class, 'membership'])->name('membership');
Route::get('/members', [PageController::class, 'members'])->name('members');
Route::get('/policy', [PageController::class, 'policy'])->name('policy');
Route::get('/events', [PageController::class, 'events'])->name('events');
Route::get('/projects', [PageController::class, 'projects'])->name('projects');
Route::get('/resources', [PageController::class, 'resources'])->name('resources');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::fallback(function () {
    return response()->view('errors.404', status: 404);
});
