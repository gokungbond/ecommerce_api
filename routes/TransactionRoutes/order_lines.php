<?php

use App\Http\Controllers\OrderLineController;
use Illuminate\Support\Facades\Route;

Route::get('/order_lines/show/{orderLine}', [OrderLineController::class, 'show']);
Route::get('/order_lines/{order}/{orderLine}', [OrderLineController::class, 'edit']);
Route::patch('/order_lines/{order}/{orderLine}', [OrderLineController::class, 'update']);
Route::delete('/order_lines/{order}/{orderLine}', [OrderLineController::class, 'destroy']);