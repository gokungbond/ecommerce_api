<?php

namespace App\Http\Controllers;

use App\Models\Transaction\Order;
use App\Models\Transaction\OrderLine;
use App\Http\Requests\StoreOrderLineRequest;
use App\Http\Requests\UpdateOrderLineRequest;

class OrderLineController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderLineRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(OrderLine $orderLine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order, OrderLine $orderLine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderLineRequest $request, Order $order, OrderLine $orderLine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order, OrderLine $orderLine)
    {
        //
    }
}
