<?php

namespace App\Http\Resources\Project;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
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
            'type' => 'project',
            'id' => $this->resource->getRouteKey(),
            'attributes' => [
                'title' => $this->title,
                'description' => $this->description,
                'image' => 'storage/' . $this->image,
                'url' => $this->url
            ],
            'links' => [
                'self' => route('api.getProject', $this->resource)
            ]
        ];
    }
}
