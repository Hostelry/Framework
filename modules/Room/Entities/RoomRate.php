<?php

declare(strict_types=1);

namespace Hostelry\Room\Entities;

use Illuminate\Database\Eloquent\Model;

final class RoomRate extends Model
{
    protected $fillable = ['room', 'hours', 'rate'];
    protected $hidden = ['id', 'room', 'created_at', 'updated_at'];

    public function toArray()
    {
        return [
            'hours' => (int) $this->hours,
            'rate' => (float) $this->rate,
        ];
    }
}
