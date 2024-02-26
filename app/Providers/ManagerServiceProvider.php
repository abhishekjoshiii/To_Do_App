<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Manager\User\{UserManagerInterface,UserManager};

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
