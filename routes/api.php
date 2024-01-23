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

        //categories route
        include base_path('routes/apiRoutes/categories.php');

        //products route
        include base_path('routes/apiRoutes/products.php');

    });

});
 