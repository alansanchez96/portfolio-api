<?php

namespace App\Http\Controllers\Project\Contracts;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Project\ProjectCollection;

interface GetAllProjectsInterface
{
    /**
     * Genera un JSON con todos los proyectos creados
     *
     * @return ProjectCollection|JsonResource
     */
    public function getAllProjects(): ProjectCollection|JsonResource;
}
