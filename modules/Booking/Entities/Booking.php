<?php

declare(strict_types=1);

namespace Hostelry\Booking\Entities;

use Hostelry\Room\Entities\Room;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Booking extends Model
{
    protected $fillable = ['checkin', 'checkin_by', 'code', 'room'];

    /**
     * Includes updating of the Room status
     *
     * @param $user
     * @param $checkinTime
     * @param Room $room
     * @return Booking
     */
    public static function checkIn($user, $checkinTime, Room $room)
    {
        return self::firstOrCreate([
            'code' => Str::uuid()->toString(),
            'checkin_by' => $user,
            'checkin' => $checkinTime,
            'room' => $room->code,
        ]);
    }
}
