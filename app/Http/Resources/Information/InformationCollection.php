<?php

namespace App\Http\Resources\Information;

use Illuminate\Http\Resources\Json\ResourceCollection;

class InformationCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection,
            'links' => [
                'self' => route('api.getAllInformations')
            ],
            'meta' => [
                'informations_count' => $this->collection->count()
            ],
            'jsonapi' => [
                'version' => '1.1'
            ]
        ];
    }
}
