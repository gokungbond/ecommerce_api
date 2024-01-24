<?php

use App\Http\Controllers\ProductInventoryController;
use Illuminate\Support\Facades\Route;

Route::patch('/product_inventories/activate/{id}', [ProductInventoryController::class, 'toggleActivation']);