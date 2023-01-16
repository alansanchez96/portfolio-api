<?php

namespace App\Http\Controllers\Project\Contracts;

use App\Http\Resources\Project\ProjectResource;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Project\ProjectCollection;

interface GetProjectInterface
{
    /**
     * Retorna el Project Entity solicitado por ID recibido
     *
     * @param integer $id
     * @return ProjectResource|JsonResource|ProjectCollection
     */
    public function getProject(int $id): ProjectResource|JsonResource|ProjectCollection;
}
