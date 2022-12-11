<?php

namespace App\Http\Controllers\Stack;

use App\Models\Stack;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Stack\Contracts\GetAllStacksInterface;

class GetAllStacksController extends Controller implements GetAllStacksInterface
{
    /**
     * Retorna una respusta JSON todos los registros almacenados.
     *
     * @return JsonResponse
     */
    public function getAllStacks(): JsonResponse
    {
        return response()->json(Stack::all(), 200);
    }
}
