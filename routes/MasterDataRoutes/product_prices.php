<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductPriceController;

Route::patch('/product_prices/activate/{id}', [ProductPriceController::class, 'toggleActivation']);