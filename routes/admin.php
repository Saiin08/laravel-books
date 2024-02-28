<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\UserController;

Route::middleware(['auth','can:admin'])->group(function() {

   // route for authors
   Route::get('/authors', [AuthorController::class,  'index'])->name('admin.author.index');
 
   Route::get('/', function () {
      return view('admin.index');
   })->name('admin.index');

   Route::get('/authors/create',[AuthorController::class,'create'])->name('admin.author.create');

   Route::post('/authors/store',[AuthorController::class,'store'])->name('admin.author.store');

   // route for books
   Route::get('/books',[BookController::class,'index'])->name('admin.book.index');

   Route::get('/books/create',[BookController::class,'edit'])->name('admin.book.create');

   Route::post('/books/store',[BookController::class,'store'])->name('admin.book.store');

   Route::get('/books/edit/{id}',[BookController::class,'edit'])->name('admin.book.edit');

   Route::put('/books/update/{id?}', [BookController::class, 'store'])->name('admin.book.update');

   // route for users
   Route::get('/users',[UserController::class,'index'])->name('admin.user.index');
});

