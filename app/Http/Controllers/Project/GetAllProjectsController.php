<?php

namespace App\Http\Controllers\Project;

use App\Models\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Project\ProjectCollection;
use App\Http\Controllers\Project\Contracts\GetAllProjectsInterface;

class GetAllProjectsController extends Controller implements GetAllProjectsInterface
{
    /**
     * Genera un JSON con todos los proyectos creados
     *
     * @return ProjectCollection|JsonResource
     */
    public function getAllProjects(): ProjectCollection|JsonResource
    {
        return ProjectCollection::make(Project::all());
    }
}
