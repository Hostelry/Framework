<?php

declare(strict_types=1);

namespace App\Providers;

use Hostelry\Booking\Events\CustomerHasCheckedIn;
use Hostelry\Booking\Listeners\RoomTransaction;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

final class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        CustomerHasCheckedIn::class => [
            RoomTransaction::class,
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
