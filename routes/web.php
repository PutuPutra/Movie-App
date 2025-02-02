<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;

Route::view('/', 'layouts/movies');

Route::get('/movie/show/{imdbID}', [MoviesController::class, 'show'])->name('layouts.show');

// Route::get('/movies/search', [MoviesController::class, 'search'])->name('movies.search');
