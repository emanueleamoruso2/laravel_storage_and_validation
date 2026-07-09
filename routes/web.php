<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PublicController::class,'home'])->name('home');

Route::post('/product/create',[ProductController::class,'store'])->name('product.store')->middleware('auth');

Route::get('/product/index',[ProductController::class,'index'])->name('index')->middleware('auth');

Route::get('/create/product',[ProductController::class,'create'])->name('product.create')->middleware('auth');