<?php

namespace App\Http\Controllers\Project;

use App\Concerns\GetFile;
use App\Concerns\JsonResponses;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Project\Contracts\ProjectUpdateInterface;

class ProjectUpdateController extends Controller implements ProjectUpdateInterface
{
    use GetFile, JsonResponses;

    /**
     * Verifica que el proyecto exista mediante su ID.
     * Valida que exista una imagen en la solicitud entrante.
     * Actualiza ese modelo asignado por ID.
     * Retorna una respuesta en formato JSON.
     *
     * @param Request $request
     * @param integer $id
     * @return JsonResponse
     */
    public function updateProject(Request $request, int $id): JsonResponse
    {
        $project = Project::findOrFail($id);

        if (!isset($project)) {
            return $this->responseModelNotFound('Proyecto');
        }

        $file = $this->getFile($request, 'image', 'projects');
        if (!isset($file)) {
            return $this->fileResponseFailed();
        }

        $project->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => 'storage/' . $file,
            'url' => $request->url,
        ]);

        return $this->responseSuccess('actualizado');
    }
}
