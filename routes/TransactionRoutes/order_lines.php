<?php

use App\Http\Controllers\OrderLineController;
use Illuminate\Support\Facades\Route;

Route::get('/order_lines/show/{id}', [OrderLineController::class, 'show']);
Route::get('/order_lines/{orderId}/{id}', [OrderLineController::class, 'edit']);
Route::patch('/order_lines/{orderId}/{id}', [OrderLineController::class, 'update']);
Route::delete('/order_lines/{orderId}/{id}', [OrderLineController::class, 'destroy']);