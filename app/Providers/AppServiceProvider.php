<?php

namespace App\Providers;

use App\Contracts\BaseRepositoryInterface;
use App\Contracts\BaseServiceInterface;
use App\Repositories\BaseRepository;
use App\Services\BaseService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public array $bindings = [
        BaseRepositoryInterface::class => BaseRepository::class,
        BaseServiceInterface::class => BaseService::class,
    ];
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
