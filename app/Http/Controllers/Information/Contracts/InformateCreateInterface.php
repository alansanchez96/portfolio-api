<?php
namespace App\Http\Controllers\Information\Contracts;

use Illuminate\Http\JsonResponse;
use App\Http\Requests\InformationRequest;

interface InformateCreateInterface
{
    /**
     * Valida los datos recibidos.
     * Almacena la solicitud en DB.
     * Y retorna respuesta JSON.
     *
     * @param InformationRequest $request
     * @return JsonResponse
     */
    public function createInformation(InformationRequest $request): JsonResponse;
}