<?php

declare(strict_types=1);

namespace Hostelry\Booking\Events;

use Hostelry\Room\Entities\Room;
use Illuminate\Queue\SerializesModels;

final class CustomerHasCheckedIn
{
    use SerializesModels;

    private $room;
    private $booking;
    private $user;

    public function getRoom() : Room
    {
        return $this->room;
    }

    public function getBooking() : Booking
    {
        return $this->booking;
    }

    public function getUser() : string
    {
        return $this->user;
    }

    public function __construct(Booking $booking, Room $room, string $user)
    {
        $this->room = $room;
        $this->booking = $booking;
        $this->user = $user;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
