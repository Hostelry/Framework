<?php

namespace Hostelry\Room\Transformers;

use Illuminate\Http\Resources\Json\Resource;

class RoomResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'code' => $this->code,
            'number' => $this->number,
            'rates' => $this->rates->toArray(),
        ];
    }
}
