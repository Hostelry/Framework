<?php

declare(strict_types=1);

namespace Hostelry\Room\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class Room extends Model
{
    protected $fillable = ['code', 'number', 'branch_id', 'status'];
    protected $hidden = ['id', 'created_at', 'updated_at'];

    public function setRate(int $hours = 3, float $rate = 250.00)
    {
        RoomRate::firstOrCreate([
            'room' => $this->code,
            'hours' => $hours,
            'rate'  => $rate
        ]);
    }

    public function getRouteKeyName()
    {
        return 'code';
    }

    public function scopeStatus($query, string $status = 'available')
    {
        return $query->where(['status' => $status]);
    }

    public function scopeRateForPeriodOf($query, int $hours = 3)
    {
        return $query->join('room_rates', 'rooms.id', '=', 'room_rates.room_id')
            ->where('room_rates.hours', '=', $hours)
            ->pluck('room_rates.rate')
            ->first();
    }

    public function rates() : HasMany
    {
        return $this->hasMany(RoomRate::class, 'room', 'code');
    }

    public function isAvailable() : bool
    {
        return 'available' == strtolower($this->status);
    }
}
