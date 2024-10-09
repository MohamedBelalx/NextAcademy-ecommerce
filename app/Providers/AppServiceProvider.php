<?php

namespace App\Providers;

use App\Repository\Interface\IOrderDetailsRepository;
use App\Repository\Interface\IOrderRepository;
use App\Repository\Interface\IProductsRepository;
use App\Repository\Interface\ITradeMarkRepository;
use App\Repository\OrderDetailsRepository;
use App\Repository\OrderRepository;
use App\Repository\ProductsRepository;
use App\Repository\TradeMarkRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(ITradeMarkRepository::class, TradeMarkRepository::class);
        $this->app->singleton(IProductsRepository::class, ProductsRepository::class);
        $this->app->singleton(IOrderRepository::class, OrderRepository::class);
        $this->app->singleton(IOrderDetailsRepository::class, OrderDetailsRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
