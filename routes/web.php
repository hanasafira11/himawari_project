<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('home');
});

//home & katalog
Route::get('/katalog', [ProductController::class, 'index']);


// Halaman utama admin
Route::get('/admin', [AdminController::class, 'index']);

// Proses CRUD
Route::post('/admin/add', [AdminController::class, 'store']);
Route::put('/admin/update-stock/{id}', [AdminController::class, 'updateStock']);
Route::delete('/admin/delete/{id}', [AdminController::class, 'destroy']);