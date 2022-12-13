<?php

namespace App\Http\Controllers\Stack\Contracts;

use Illuminate\Http\JsonResponse;

interface GetAllStacksInterface
{
    /**
     * Retorna una respusta JSON todos los registros almacenados.
     *
     * @return JsonResponse
     */
    public function getAllStacks(): JsonResponse;
}
