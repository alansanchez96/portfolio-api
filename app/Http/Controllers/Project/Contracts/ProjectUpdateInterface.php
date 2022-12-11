<?php

namespace App\Http\Controllers\Project\Contracts;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

interface ProjectUpdateInterface
{
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
    public function updateProject(Request $request, int $id): JsonResponse;
}
