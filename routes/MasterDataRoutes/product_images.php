<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductImageController;

Route::post('/product_images/upload', [ProductImageController::class, 'uploadFile']);
Route::get('/product_images/delete/{product}/{productImage}', [ProductImageController::class, 'deleteFile']);