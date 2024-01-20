<?php

namespace App\Http\Controllers;

use App\Traits\HasApiResponses;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Interfaces\MasterData\UnitInterface;
use Illuminate\Http\Response;

class UnitController extends Controller
{
    use HasApiResponses;

    protected UnitInterface $unitService;

    public function __construct(UnitInterface $unitService)
    {
        $this->unitService = $unitService;
    }

    public function list()
    {
        $data = $this->unitService->list();

        return $this->success(
            $data,
        );
    }

    public function show($id) 
    {
        $data = $this->unitService->show($id);

        return $this->success(
            $data,
        );
    }
    public function store(StoreCategoryRequest $request) 
    {
        $data = $this->unitService->show(
            $request->validated()
        );

        return $this->success(
            $data,
        );
    }
    public function edit($id) 
    {
        $data = $this->unitService->edit($id);

        return $this->success(
            $data,
        );
    }
    public function update($id ,UpdateCategoryRequest $request) 
    {   
        $data = $this->unitService->update(
            $id,
            $request->validated()
        );

        return $this->success(
            $data,
        );
    }
    public function destory($id) 
    {
        $this->unitService->destory($id);

        return $this->success(
            [],
            '',
            Response::HTTP_NO_CONTENT
        );
    }
}
