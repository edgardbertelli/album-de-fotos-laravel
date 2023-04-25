<?php

namespace App\Providers;

use App\Interfaces\ClientInterface;
use App\Repositories\ClientRepository;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(ClientInterface::class, ClientRepository::class);
    }
}
