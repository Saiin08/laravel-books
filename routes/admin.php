<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthorController;


Route::middleware(['auth'])->group(function() {

   Route::get('/authors', [AuthorController::class,  'index'])->name('admin.author.index');
 
   Route::get('/', function () {
      return view('admin.index');
   })->name('admin.index');

   Route::get('/authors/create',[AuthorController::class,'create'])->name('admin.author.create');

   Route::post('/authors/store',[AuthorController::class,'store'])->name('admin.author.store');


});

