<?php

declare(strict_types=1);

namespace Hostelry\Booking\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

final class RoomTransaction
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $room = $event->getRoom();

        $room->update(['status' => 'occupied']);
    }
}
