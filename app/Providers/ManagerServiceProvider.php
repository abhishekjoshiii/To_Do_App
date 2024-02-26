<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ManagerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            UserManagerInterface::class,
            UserManager::class,
        );
        
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
