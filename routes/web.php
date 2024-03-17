<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsersController;
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

Route::get('/', function () {
    return view('dashboard');
});


Route::prefix('dashboard')->group(function () { 
    Route::get('/', [DashboardController::class,'index'])->name('dashboard.index');
    // Route::delete('/delete', [ProductController::class,'delete'])->name('produto.delete');
});



Route::prefix('users')->group(function () { 
    Route::get('/', [UsersController::class,'index'])->name('users.users');
    // Route::delete('/delete', [ProductController::class,'delete'])->name('produto.delete');
});


Route::prefix('produtos')->group(function () { 
    Route::get('/', [ProductController::class,'index'])->name('produto.index');
    Route::delete('/delete', [ProductController::class,'delete'])->name('produto.delete');
});

