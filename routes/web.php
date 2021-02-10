<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ShowPosts;
use App\Http\Livewire\User\UploadPhoto;

Route::get('/upload', UploadPhoto::class)
            ->name('upload.photo.user')
            ->middleware('auth');

Route::get('posts', ShowPosts::class)
            ->name('posts.index')
            ->middleware('auth');

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
