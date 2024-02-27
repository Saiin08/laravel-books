<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\BookController;

Route::middleware(['auth'])->group(function() {

   // route for authors
   Route::get('/authors', [AuthorController::class,  'index'])->name('admin.author.index');
 
   Route::get('/', function () {
      return view('admin.index');
   })->name('admin.index');

   Route::get('/authors/create',[AuthorController::class,'create'])->name('admin.author.create');

   Route::post('/authors/store',[AuthorController::class,'store'])->name('admin.author.store');

   // route for books
   Route::get('/books',[BookController::class,'index'])->name('admin.book.index');

   Route::get('/books/create',[BookController::class,'create'])->name('admin.book.create');


});

