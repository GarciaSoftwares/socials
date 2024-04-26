<?php

namespace App\Services\Instagram;

use App\Services\Instagram\API\Contracts\InstagramApiContract;
use App\Services\Instagram\API\InstagramApi;
use App\Services\Instagram\Contracts\InstagramServiceContract;
use Illuminate\Support\ServiceProvider;

class InstagramServiceProvider extends ServiceProvider
{
    /**
     * All the container bindings that should be registered.
     *
     * @var array
     */
    public array $bindings = [
        InstagramServiceContract::class => InstagramService::class,
        InstagramApiContract::class     => InstagramApi::class
    ];

    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
