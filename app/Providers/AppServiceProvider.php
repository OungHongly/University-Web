<?php

namespace App\Providers;

use Exception;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Schema\Builder;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        Builder::defaultStringLength(255);

        try {
            //DB::connection()->getPDO();
            //dump('Database is connected. Database Name is : ' . DB::connection()->getDatabaseName());
         } catch (Exception $e) {
            dump('Database connection failed');
         }

    }
}
