<?php

namespace App\Http\Controllers\Project;

use App\Models\Project;
use App\Concerns\GetFile;
use App\Concerns\JsonResponses;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Http\Controllers\Project\Contracts\ProjectCreateInterface;

class ProjectCreateController extends Controller implements ProjectCreateInterface
{
    use GetFile, JsonResponses;

    /**
     * Valida los datos recibidos.
     * Valida que exista una imagen.
     * Almacena la solicitud en DB.
     * Y retorna respuesta JSON.
     *
     * @param ProjectRequest $request
     * @return JsonResponse
     */
    public function createProject(ProjectRequest $request): JsonResponse
    {
        $file = $this->getFile($request, 'image', 'projects');

        if (!isset($file)) {
            return $this->fileResponseFailed();
        }

        Project::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => 'storage/' . $file,
            'url' => $request->url
        ]);

        return $this->responseSuccess('creado');
    }
}
