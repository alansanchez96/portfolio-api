<?php

namespace App\Http\Controllers\Information\Contracts;

use Illuminate\Http\JsonResponse;
use App\Http\Requests\InformationRequest;

interface InformationUpdateInterface
{
    /**
     * Verifica que Information Entity exista mediante su ID.
     * Actualiza el Entity asignado por ID.
     * Retorna una respuesta en formato JSON.
     *
     * @param InformationRequest $request
     * @param integer $id
     * @return JsonResponse
     */
    public function updateInformation(InformationRequest $request, int $id): JsonResponse;
}
