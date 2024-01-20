<?php

namespace App\Http\Controllers;


use App\Traits\HasApiResponses;
use App\Models\MasterData\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Interfaces\MasterData\ProductInterface;
use Illuminate\Http\Response;


class ProductController extends Controller
{

    use HasApiResponses;

    protected ProductInterface $productService; 


    public function __construct(ProductInterface $productService){
        $this->productService = $productService;
    }

    
    public function list()
    {
        $data = $this->productService->list();

        return $this->success(
            $data,
        );
    }

    public function show()
    {
        $data = $this->productService->show($id);

         return $this->success(
            $data,
        );
    }

    public function store(StoreProductRequest $request)
    {
        $data = $this->productService->show(
            $request->validate()
        );
        
        return $this->success(
            $data,
        );
    }

    public function edit($id)
    {
        $data = $this->productService->edit($id);
        
        return $this->success(
            $data,
        );
    }

    public function update($id, UpdateProductRequest $request)
    {
         $data = $this->productService->show(
            $id,
            $request->validate()
        );
        
        return $this->success(
            $data,
        );
    }

    public function destroy($id)
    {
        $this->productService->destroy($id);

        return $this->success(
            [],
            '',
            Response::HTT_NO_CONTENT
        );
    }
}
