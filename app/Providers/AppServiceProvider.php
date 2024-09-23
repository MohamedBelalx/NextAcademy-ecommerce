<?php

namespace App\Providers;

use App\Repository\Interface\ITradeMarkRepository;
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
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
