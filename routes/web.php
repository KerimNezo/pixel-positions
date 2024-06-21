<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TagController;

Route::get('/', [JobController::class, 'index']);

Route::get('/search', SearchController::class); //invokeable controllers su kontroleri koji imaju samo jednu akciju, mozemo kod njih samo proslijediti
Route::get('/tags/{tag:name}', TagController::class);
// ovdje u ovaj wildcard smo stavili :name, iz razloga što, ako ostavimo samo {tag}, laravel će povezati tag defaultno iz taga tu id taga,
// i njega će koristiti kao identifier, ali mi možemo staviti specifično neki drugi atribut da se koristi.

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create']);
    Route::post('/register', [RegisteredUserController::class, 'store']);

    Route::get('/login', [SessionController::class, 'create']);
    Route::post('/login', [SessionController::class, 'store']);
});


Route::delete('/logout', [SessionController::class, 'destroy'])->middleware('auth');
