<?php

namespace App\Http\Controllers;

use App\Traits\HasApiResponses;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Interfaces\MasterData\CategoryInterface;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    use HasApiResponses;

    protected CategoryInterface $categoryService;

    public function __construct(CategoryInterface $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function list()
    {
        $data = $this->categoryService->list();

        return $this->success(
            $data,
        );
    }

    public function show($id) 
    {
        $data = $this->categoryService->show($id);

        return $this->success(
            $data,
        );
    }
    public function store(StoreCategoryRequest $request) 
    {
        $data = $this->categoryService->show(
            $request->validated()
        );

        return $this->success(
            $data,
        );
    }
    public function edit($id) 
    {
        $data = $this->categoryService->edit($id);

        return $this->success(
            $data,
        );
    }
    public function update($id ,UpdateCategoryRequest $request) 
    {   
        $data = $this->categoryService->update(
            $id,
            $request->validated()
        );

        return $this->success(
            $data,
        );
    }
    public function destory($id) 
    {
        $this->categoryService->destory($id);

        return $this->success(
            [],
            '',
            Response::HTTP_NO_CONTENT
        );
    }


}
