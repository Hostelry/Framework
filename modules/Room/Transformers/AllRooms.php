<?php

namespace Hostelry\Room\Transformers;

use Illuminate\Http\Resources\Json\ResourceCollection;

class AllRooms extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'success' => true,
            'data' => $this->collection,
        ];
    }
}
