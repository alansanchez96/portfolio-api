<?php

namespace App\Http\Resources\Message;

use Illuminate\Http\Resources\Json\JsonResource;

class MessageResource extends JsonResource
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
            'type' => 'message',
            'id' => $this->resource->getRouteKey(),
            'attributes' => [
                'name' => $this->name,
                'email' => $this->email,
                'message' => $this->message
            ],
            'links' => [
                'self' => route('api.getMessage', $this->resource)
            ]
        ];
    }
}
