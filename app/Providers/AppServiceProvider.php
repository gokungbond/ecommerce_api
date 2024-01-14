<?php

namespace App\Providers;

use App\Models\MasterData\Category;
use Illuminate\Support\ServiceProvider;
use App\Service\MasterData\CategoryService;
use App\Interfaces\MasterData\CategoryInterface;

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
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
