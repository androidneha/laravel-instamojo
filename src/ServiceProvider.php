<?php

namespace Laravel\Instamojo;

/**
 * Class ServiceProvider
 * @package Laravel\Instamojo
 */
class ServiceProvider extends LaravelServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([__DIR__.'/config/instamojo.php' => config_path('instamojo.php')]);
    }
}