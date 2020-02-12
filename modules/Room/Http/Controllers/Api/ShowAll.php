<?php

declare(strict_types=1);

namespace Hostelry\Room\Http\Controllers\Api;

use Hostelry\Room\Entities\Room;
use Hostelry\Room\Transformers\AllRooms;
use Hostelry\Room\Transformers\RoomResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Routing\Controller;

final class ShowAll extends Controller
{
    public function __invoke(Request $request) : JsonResource
    {
        return AllRooms::make(RoomResource::collection(Room::all()));
    }
}
