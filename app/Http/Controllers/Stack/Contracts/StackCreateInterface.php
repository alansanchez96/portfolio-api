<?php

namespace App\Http\Controllers\Stack\Contracts;

use Illuminate\Http\JsonResponse;
use App\Http\Requests\StackRequest;

interface StackCreateInterface
{
    /**
     * Valida los datos recibidos.
     * Valida que exista una imagen.
     * Almacena la solicitud en DB.
     * Y retorna respuesta JSON.
     *
     * @param StackRequest $request
     * @return JsonResponse
     */
    public function createStack(StackRequest $request): JsonResponse;
}
