<?php

namespace App\Services\MasterData;

use App\Models\MasterData\Product;
use App\interface\MasterData\ProductInterface;

class productService implements ProductInterface{

    protected Product $model;

    public function __construct(Product $model){
        $this->$model = $model;
    }

    public function list(){
        return $this->model::all();
    }

    public function show($id){
        return $this->model::findOrFail($id);
    }

    public function store($data){
     
        $store = $this->model::create($data);

        return $store;
    }

    public function edit($id){
        return $this->model::findOrFail($id);
    }


    public function update($id, $data){

        $update = $this->model::findOrFail($id);
        $update->fill($data);
        $update->save();
        
        return $update;
    }


    public function destroy($id){
        
        $this->model->destroy($id);

    }
}