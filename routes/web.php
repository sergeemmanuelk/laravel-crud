<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index');

Route::get('/books', [\App\Http\Controllers\BookController::class, 'index'])->name('books.index');
Route::get('/books/create', [\App\Http\Controllers\BookController::class, 'create'])->name('books.create');
Route::post('/books', [\App\Http\Controllers\BookController::class, 'store'])->name('books.store');
Route::get('/books/edit/{book}', [\App\Http\Controllers\BookController::class, 'edit'])->name('books.edit');
Route::put('/books/{book}', [\App\Http\Controllers\BookController::class, 'update'])->name('books.update');
Route::delete('/books/{book}', [\App\Http\Controllers\BookController::class, 'destroy'])->name('books.destroy');
