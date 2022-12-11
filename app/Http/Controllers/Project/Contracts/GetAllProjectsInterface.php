<?php

namespace App\Http\Controllers\Project\Contracts;

use Illuminate\Http\JsonResponse;

interface GetAllProjectsInterface
{
    /**
     * Genera un JSON con todos los proyectos creados
     *
     * @return JsonResponse
     */
    public function getAllProjects(): JsonResponse;
}
