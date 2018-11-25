<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Interfaces;
use App\Repositories;

class RepositoryServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
                Interfaces\ProvincesRepositoryInterface::class, Repositories\EloquentProvincesRepository::class
        );
        $this->app->singleton(
                Interfaces\CitiesRepositoryInterface::class, Repositories\EloquentCitiesRepository::class
        );
        $this->app->singleton(
                Interfaces\LanguagesRepositoryInterface::class, Repositories\EloquentLanguagesRepository::class
        );
        $this->app->singleton(
                Interfaces\UsersRepositoryInterface::class, Repositories\EloquentUsersRepository::class
        );
        $this->app->singleton(
                Interfaces\ContentBlocksRepositoryInterface::class, Repositories\EloquentContentBlocksRepository::class
        );
        $this->app->singleton(
                Interfaces\CitiesVariablesRepositoryInterface::class, Repositories\EloquentCitiesVariablesRepository::class
        );
        $this->app->singleton(
                Interfaces\CitiesVariableRulesRepositoryInterface::class, Repositories\EloquentCitiesVariableRulesRepository::class
        );
    }

}
