<?php

declare(strict_types=1);

namespace Hostelry\Business\Entities;

use Hostelry\Room\Entities\Room;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

final class Branch extends Model
{
    protected $fillable = ['code', 'name', 'slug', 'business_id'];

    protected $hidden = ['id', 'coode', 'slug', 'created_at', 'updated_at'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function rooms() : HasMany
    {
        return $this->hasMany(Room::class);
    }

    public function setupNumberOfRooms(int $numberOfRooms = 1) : void
    {
        for ($i = 1; $i <= $numberOfRooms; $i++) {
            $room = Room::firstOrCreate([
                'code' => Str::uuid()->toString(),
                'number' => $i,
                'slug' => Str::slug($i),
                'branch_id' => $this->id,
            ]);

            $room->setRate();
        }
    }
}
