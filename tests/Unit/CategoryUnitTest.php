<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\MasterData\Category;
use App\Services\MasterData\CategoryService;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CategoryUnitTest extends TestCase
{
    use RefreshDatabase;

    protected $categoryService;
    
    public function setUp() : void
    {
        parent::setUp();

        $this->artisan('migrate');

        $this->categoryService = new CategoryService(new Category());
    }

    public function test_it_can_retrieve_data() 
    {
        $count = rand(10, 100);

        //create categories
        Category::factory()
            ->count($count)
            ->create();

        //check if the database count is match in the random count
        $this->assertDatabaseCount(
            'categories',
            $count
        );
    }

    public function test_it_can_store_data()
    {
        $data = [
            'name' => 'Category Test',
            'description' => 'This is a test',
            'active' => true,
        ];

        $this->categoryService->store($data);

        $this->assertDatabaseHas('categories', $data);
    }

    public function test_it_can_fetch_data()
    {
        $data = [
            'name' => 'Category Test',
            'description' => 'This is a test',
            'active' => true,
        ];

        $response = $this->categoryService->store($data);

        $fetchFromEdit = $this->categoryService->edit($response->id);

        $this->assertEquals($data['name'], $fetchFromEdit->name);

        $fetchFromShow = $this->categoryService->show($response->id);

        $this->assertEquals($data['name'], $fetchFromShow->name);
    }

    public function test_it_can_update_data()
    {
        $data = [
            'name' => 'Category Test',
            'description' => 'This is a test',
            'active' => true,
        ];

        $response = $this->categoryService->store($data);

        $newValue = 'Updated Category';

        $response->name = $newValue;

        $updatedValue = $this->categoryService->update($response->id, $response->toArray());

        $this->assertEquals($newValue, $updatedValue->name);
    }

    public function test_it_can_delete_data()
    {
        $data = [
            'name' => 'Category Test',
            'description' => 'This is a test',
            'active' => true,
        ];

        $response = $this->categoryService->store($data);

        $this->categoryService->destory($response->id);

        $this->assertDatabaseCount('categories', 0);
    }
}
