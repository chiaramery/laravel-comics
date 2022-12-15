<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $data = config('comics');
    return view('home', compact("data"));
})->name('home');

Route::get('/characters', function () {
    $data = config('comics.artist');
    return view('characters', compact("data"));
})->name('characters');

Route::get('/movies', function () {
    $data = config('comics.title');
    return view('movies', compact("data"));
})->name('movies');
