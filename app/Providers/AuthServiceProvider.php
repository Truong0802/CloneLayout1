<?php

namespace App\Providers;

use App\Repositories\AuthRepository as RepositoriesAuthRepository;
use App\Repositories\interface\AuthRepository;
use App\Services\AuthService;
use App\Services\interface\AuthServiceInterface;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //Repository
        $this->app->bind(AuthRepository::class, RepositoriesAuthRepository::class);

        //Services
        $this->app->bind(AuthServiceInterface::class, AuthService::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
