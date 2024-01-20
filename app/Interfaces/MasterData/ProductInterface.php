<?php

namespace App\Interfaces\MasterData;

interface ProductInterface {
    
    public function list();

    public function show($id);

    public function store($data);

    public function update($id, $data);

    public function edit($id);

    public function destroy($id);

}