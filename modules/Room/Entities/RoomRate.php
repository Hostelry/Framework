<?php

declare(strict_types=1);

namespace Hostelry\Room\Entities;

use Illuminate\Database\Eloquent\Model;

final class RoomRate extends Model
{
    protected $fillable = ['room', 'hours', 'rate'];
}
