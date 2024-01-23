<?php

namespace App\Interfaces\Transaction;

interface OrderLineInterface 
{
    public function show($orderId, $id);

    public function edit($orderId, $id);
    
    public function update($orderId, $id, $data);

    public function destroy($orderId, $id);

}