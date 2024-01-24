<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->prefix('v1')->group(function() {

    Route::prefix('admin')->group(function() {

        Route::prefix('master_data')->group(function() {
            //categories route
            include base_path('routes/MasterDataRoutes/categories.php');

            //products route
            include base_path('routes/MasterDataRoutes/products.php');

            //product prices route
            include base_path('routes/MasterDataRoutes/product_prices.php');

            //product inventories route
            include base_path('routes/MasterDataRoutes/product_inventories.php');
        });

    });

    Route::prefix('transaction')->group(function() {
        //product prices route
        include base_path('routes/TransactionRoutes/orders.php');

        //product inventories route
        include base_path('routes/TransactionRoutes/order_lines.php');
    });

});
 