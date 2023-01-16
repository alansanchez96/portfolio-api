<?php

namespace App\Http\Resources\Stack;

use Illuminate\Http\Resources\Json\ResourceCollection;

class StackCollection extends ResourceCollection
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
                'self' => route('api.getAllStacks')
            ],
            'meta' => [
                'stacks_count' => $this->collection->count()
            ]
        ];
    }
}