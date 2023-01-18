<?php

namespace App\Http\Resources\Stack;

use Illuminate\Http\Resources\Json\JsonResource;

class StackResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'type' => 'stack',
            'id' => $this->resource->getRouteKey(),
            'attributes' => [
                'name' => $this->name,
                'state' => $this->state,
                'image' => $this->image
            ],
            'links' => [
                'self' => route('api.getStack', $this->resource)
            ]
        ];
    }
}
