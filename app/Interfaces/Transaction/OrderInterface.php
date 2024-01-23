<?php

namespace App\Interfaces\Transaction;

interface OrderInterface {
    
    public function list();

    public function show($id);

    public function store($data);

    public function update($id, $data);

    public function edit($id);

    public function destroy($id);

    public function export();

}