<?php

use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('upload');
// });



// Route::get('image', [ImageController::class , 'index'])->name('image');
// Route::get('/', [ImageController::class , 'create'])->name('image.create');
// Route::post('/', [ImageController::class , 'store'])->name('image.store');


Route::get('/', [ImageController::class, 'index'])->name('image');
Route::get('/create', [ImageController::class, 'create'])->name('image.create');
Route::post('/', [ImageController::class, 'store'])->name('image.store');
