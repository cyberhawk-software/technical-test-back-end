<?php

namespace App\Providers;

use App\Contracts\BaseRepositoryInterface;
use App\Contracts\BaseServiceInterface;
use App\Services\Base as BaseService;
use App\Repositories\Base as BaseRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public array $bindings = [
      BaseServiceInterface::class => BaseService::class,
      BaseRepositoryInterface::class => BaseRepository::class
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
