<?php

namespace App\Http\Controllers\Project;

use App\Models\Project;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Project\Contracts\GetAllProjectsInterface;

class GetAllProjectsController extends Controller implements GetAllProjectsInterface
{
    /**
     * Genera un JSON con todos los proyectos creados
     *
     * @return JsonResponse
     */
    public function getAllProjects(): JsonResponse
    {
        return response()->json(Project::all(), 200);
    }
}
