<?php

declare(strict_types=1);

namespace App\Providers;

use Hostelry\Site\Http\Controllers\Registration\DeluxePlan;
use Hostelry\Site\Http\Controllers\Registration\ExpansionPlan;
use Hostelry\Site\Http\Controllers\Registration\StarterPlan;
use Hostelry\Site\Http\Requests\Registration\DeluxePlanRegistrationRequest;
use Hostelry\Site\Http\Requests\Registration\ExpansionPlanRegistrationRequest;
use Hostelry\Site\Http\Requests\Registration\StarterPlanRegistrationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() : void
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() : void
    {
        // Hoping there's a convenient way doing this; like via configuration
        $this->app->when(StarterPlan::class)
            ->needs(Request::class)
            ->give(StarterPlanRegistrationRequest::class);

        $this->app->when(ExpansionPlan::class)
            ->needs(Request::class)
            ->give(ExpansionPlanRegistrationRequest::class);

        $this->app->when(DeluxePlan::class)
            ->needs(Request::class)
            ->give(DeluxePlanRegistrationRequest::class);
    }
}
