<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\CurServiceInterfase;
//use App\Services\CurrencyService;
use App\Services\AnotherCurService;

class DiProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //dump('regisret');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //$this->app->bind(CurServiceInterfase::class, AnotherCurService::class);
        $this->app->bind(CurServiceInterfase::class, AnotherCurService::class);
        //$this->app->singleton(CurServiceInterfase::class, new AnotherCurService());
    }
}
