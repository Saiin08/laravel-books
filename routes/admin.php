<?php

use Illuminate\Support\Facades\Route;


Route::get('admin/authors', [App\Http\Controllers\Admin\AuthorController::class, 'index'])->name('admin.author.index');

Route::get('/admin', function () {
    return view('admin.index');
})->name('admin.index');