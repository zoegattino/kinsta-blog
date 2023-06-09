<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return 'bladieb;a';
});

Route::get('/', function () {
    return Inertia::render('Index', [
        'articles' => Article::latest()->get()
    ]);
})->name('home');