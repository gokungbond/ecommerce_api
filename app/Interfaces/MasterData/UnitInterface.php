<?php

namespace App\Interfaces\MasterData;

interface UnitInterface {

    public function list();
    
    public function show($id);

    public function store($data);

    public function edit($id);

    public function update($id, $data);

    public function destory($id);

}
