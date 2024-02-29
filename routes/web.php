<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HomepageController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomepageController::class,'index']);

Route::get('/about-us',function(){
    return view('about.about-us');
});

Route::get('/book/{id}',[BookController::class,'show'])->name('book.show');

Route::post('/book/{id}/review',[BookController::class,'review'])->middleware('auth')->name('book.review');

Route::delete('/book/{id}/review/{review_id}',[BookController::class,'delete']);
