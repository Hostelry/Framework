<?php

declare(strict_types=1);

namespace Hostelry\Booking\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

final class RouteServiceProvider extends ServiceProvider
{
    /**
     * Called before routes are registered.
     *
     * Register any model bindings or pattern based filters.
     *
     * @return void
     */
    public function boot() : void
    {
        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map() : void
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes() : void
    {
        Route::middleware('web')
            ->domain('booking.'. config('app.domain'))
            ->group(module_path('Booking', '/Routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes() : void
    {
        Route::middleware('api')
            ->domain('api.' . config('api.domain'))
            ->name('api.booking.')
            ->prefix('booking')
            ->group(module_path('Booking', '/Routes/api.php'));
    }
}
