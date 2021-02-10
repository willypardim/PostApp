<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ShowPosts;

Route::get('posts', ShowPosts::class);

Route::get('/', function () {
    return view('welcome');
});
