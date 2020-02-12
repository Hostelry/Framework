<?php

declare(strict_types=1);

namespace Hostelry\Booking\Http\Controllers\Api;

use Hostelry\Booking\Entities\Booking;
use Hostelry\Booking\Events\CustomerHasCheckedIn;
use Hostelry\Room\Entities\Room;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

final class CheckIn extends Controller
{
    public function __invoke(Request $request, Room $room) : JsonResponse
    {
        if ($room->isAvailable()) {
            $checkinTime = now('Asia/Manila');
            $user = $request->user('api')->username;

            $booking = Booking::checkIn($user, $checkinTime, $room);

            event(new CustomerHasCheckedIn($booking, $room, $user));

            return response()->json([
                'success' => true,
                'data' => [
                    'booking_id' => $booking->code,
                ]
            ]);
        }
    }
}
