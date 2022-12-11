<?php

namespace App\Http\Controllers\Stack\Contracts;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

interface StackUpdateInterface
{
    /**
     * Verifica que el stack exista mediante su ID.
     * Valida que exista una imagen en la solicitud entrante.
     * Actualiza ese modelo asignado por ID.
     * Retorna una respuesta en formato JSON.
     *
     * @param Request $request
     * @param integer $id
     * @return JsonResponse
     */
    public function updateStack(Request $request, int $id): JsonResponse;
}
