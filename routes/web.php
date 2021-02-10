<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ShowPosts;

Route::get('posts', ShowPosts::class)->middleware('auth');

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
