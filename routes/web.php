<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MainController;
use App\Models\Book;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, "index"])->name("homepage");
Route::get('/Tutti-Libri', [BookController::class, "books"])->name("libreria");
Route::get('/Nuovo-Libro', [BookController::class, "create"])->name("creaLibro")->middleware('auth');
Route::post('/salva-Libro', [BookController::class, "store"])->name("saveBook")->middleware('auth');
Route::get('/dettaglio-libro/{book}', [BookController::class, "show"])->name("show");

Route::get('/Accendi', [MainController::class, "login"])->name("accedi");
Route::get('/modifica-libri/{book}', [BookController::class, "edit"])->name("edit");
Route:: put('/aggiorna{book}', [BookController::class, "update"])->name("update");
Route::delete('/elimina-libro{book}', [BookController::class, "destroy"])->name("destroy");

Route::resource('authors', AuthorController::class);
Route::get('/Tutti-Autori', [AuthorController::class, "authors"])->name("listAutori");





