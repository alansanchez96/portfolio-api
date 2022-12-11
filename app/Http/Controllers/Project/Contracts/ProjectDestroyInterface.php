<?php

namespace App\Http\Controllers\Project\Contracts;

use Illuminate\Http\JsonResponse;

interface ProjectDestroyInterface
{
    /**
     * Verifica que el modelo exista mediante su ID.
     * Elimina el registro.
     * Retorna una respuesta formato JSON
     *
     * @param integer $id
     * @return JsonResponse
     */
    public function destroyProject(int $id): JsonResponse;
}
