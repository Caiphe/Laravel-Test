<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware(['auth'])->resource('products', ProductController::class);

Route::middleware('auth')->group(function(){
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');

    Route::middleware('is_admin')->group(function(){
        Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
        Route::post('products', [ProductController::class, 'store'])->name('products.store');
        Route::get('products/{product:id}/edit/', [ProductController::class, 'edit'])->name('products.edit');
        Route::put('products/{product:id}/update/', [ProductController::class, 'update'])->name('products.update');
        Route::delete('products/{product:id}/delete/', [ProductController::class, 'destroy'])->name('products.delete');
    });

});

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'authenticate'])->name('login');
Route::get('/register', [UserController::class, 'newUser'])->name('register');
Route::post('/register', [UserController::class, 'register'])->name('register');
