<?php

namespace App\Http\Controllers\Project;

use App\Models\Project;
use App\Http\Controllers\Controller;
use App\Http\Resources\Project\ProjectResource;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Project\ProjectCollection;
use App\Http\Controllers\Project\Contracts\GetProjectInterface;

class GetProjectController extends Controller implements GetProjectInterface
{
    /**
     * Retorna el Project Entity solicitado por ID recibido
     *
     * @param integer $id
     * @return ProjectResource|JsonResource|ProjectCollection
     */
    public function getProject(int $id): ProjectResource|JsonResource|ProjectCollection
    {
        return ProjectResource::make(Project::findOrFail($id));
    }
}
