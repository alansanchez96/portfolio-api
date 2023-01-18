<?php

namespace App\Http\Resources\Information;

use Illuminate\Http\Resources\Json\JsonResource;

class InformationResource extends JsonResource
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
            'type' => 'information',
            'id' => $this->resource->getRouteKey(),
            'attributes' => [
                'url_pdf' => $this->url_pdf
            ],
            'links' => [
                'self' => route('api.getInformation', $this->resource)
            ]
        ];
    }
}
