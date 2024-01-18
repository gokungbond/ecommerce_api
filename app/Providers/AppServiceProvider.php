<?php

namespace App\Providers;

use App\Models\MasterData\Category;
use Illuminate\Support\ServiceProvider;
use App\Service\MasterData\CategoryService;
use App\Interfaces\MasterData\CategoryInterface;
use App\Interfaces\MasterData\UnitInterface;
use App\Models\Unit;
use App\Services\MasterData\UnitService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(CategoryInterface::class, function() {
            return new CategoryService(new Category());
        });

        $this->app->singleton(UnitInterface::class, function() {
            return new UnitService(new Unit());
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
