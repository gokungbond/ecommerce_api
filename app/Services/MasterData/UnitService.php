<?php

namespace App\Services\MasterData;

use App\Models\Unit;
use App\Interfaces\MasterData\UnitInterface;

class UnitService implements UnitInterface {
    
    protected Unit $model;

    public function __construct( Unit $model) 
    {
        $this->model = $model;
    }

    public function list() 
    {
        return $this->model::all();
    }

    public function show($id) 
    {
        return $this->model::findOrFail($id);
    }
    public function store($data) 
    {
        $store = $this->model->create($data);

        return $store;
    }
    public function edit($id) 
    {
        return $this->model::findOrFail($id);
    }
    public function update($id, $data) 
    {   
        $update = $this->model::findOrFail($id);
        $update->fill($data);
        $update->save();

        return $update;
    }
    public function destory($id) 
    {
        $this->model->destroy($id);
    }

}