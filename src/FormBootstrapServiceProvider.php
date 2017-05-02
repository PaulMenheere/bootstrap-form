<?php
namespace PaulMenheere\FormBootstrap;

use Illuminate\Support\ServiceProvider;

class FormBootstrapServiceProvider extends ServiceProvider
{
    /**
     * Boots the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/config.php' => config_path('formbootstrap.php')
        ], 'config');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('formbootstrap', function ($app)
        {
            return new FormBootstrap($app->config);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['formbootstrap'];
    }
}