<?php

namespace App\Http\Controllers\Project\Contracts;

use Illuminate\Http\JsonResponse;
use App\Http\Requests\ProjectRequest;

interface ProjectCreateInterface
{
    /**
     * Valida los datos recibidos.
     * Valida que exista una imagen.
     * Almacena la solicitud en DB.
     * Y retorna respuesta JSON.
     *
     * @param ProjectRequest $request
     * @return JsonResponse
     */
    public function createProject(ProjectRequest $request): JsonResponse;
}
