<?php

declare(strict_types=1);

namespace Hostelry\Booking\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;

final class BookingServiceProvider extends ServiceProvider
{
    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot() : void
    {
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
        $this->registerFactories();
        $this->loadMigrationsFrom(module_path('Booking', 'Database/Migrations'));
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() : void
    {
        $this->app->register(RouteServiceProvider::class);
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig() : void
    {
        $this->publishes([
            module_path('Booking', 'Config/config.php') => config_path('booking.php'),
        ], 'config');
        $this->mergeConfigFrom(
            module_path('Booking', 'Config/config.php'),
            'booking'
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews() : void
    {
        $viewPath = resource_path('views/modules/booking');

        $sourcePath = module_path('Booking', 'Resources/views');

        $this->publishes([
            $sourcePath => $viewPath
        ], 'views');

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path . '/modules/booking';
        }, \Config::get('view.paths')), [$sourcePath]), 'booking');
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations() : void
    {
        $langPath = resource_path('lang/modules/booking');

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, 'booking');
        } else {
            $this->loadTranslationsFrom(module_path('Booking', 'Resources/lang'), 'booking');
        }
    }

    /**
     * Register an additional directory of factories.
     *
     * @return void
     */
    public function registerFactories() : void
    {
        if (! app()->environment('production') && $this->app->runningInConsole()) {
            app(Factory::class)->load(module_path('Booking', 'Database/Factories'));
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides() : array
    {
        return [];
    }
}
