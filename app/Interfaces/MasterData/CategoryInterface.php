<?php

namespace App\Interfaces\MasterData;

interface CategoryInterface {

    public function list();
    
    public function show($id);

    public function store($data);

    public function edit($id);

    public function update($id, $data);

    public function destory($id);

}
