<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        
        $this->app->bind(\App\Repositories\ClienteRepository::class, \App\Repositories\Eloquent\ClienteRepositoryEloquent::class);

        $this->app->bind(\App\Repositories\EnderecoRepository::class, \App\Repositories\Eloquent\EnderecoRepositoryEloquent::class); 

        $this->app->bind(\App\Repositories\FreteRepository::class, \App\Repositories\Eloquent\FreteRepositoryEloquent::class);
    }
}
