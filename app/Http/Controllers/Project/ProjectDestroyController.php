<?php

namespace App\Http\Controllers\Project;

use App\Models\Project;
use App\Concerns\GetFile;
use App\Concerns\JsonResponses;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Project\Contracts\ProjectDestroyInterface;

class ProjectDestroyController extends Controller implements ProjectDestroyInterface
{
    use JsonResponses;

    /**
     * Verifica que el modelo exista mediante su ID.
     * Elimina el registro.
     * Retorna una respuesta formato JSON
     *
     * @param integer $id
     * @return JsonResponse
     */
    public function destroyProject(int $id): JsonResponse
    {
        $project = Project::findOrFail($id);

        if (!isset($project)) {
            return $this->fileResponseFailed();
        }

        $project->delete();

        return $this->responseDetroyEntity();
    }
}
