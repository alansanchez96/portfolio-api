<?php
namespace App\Http\Controllers\Stack\Contracts;

use Illuminate\Http\JsonResponse;

interface StackDestroyInterface
{
    /**
     * Verifica que el modelo exista mediante su ID.
     * Elimina el registro.
     * Retorna una respuesta formato JSON
     *
     * @param integer $id
     * @return JsonResponse
     */
    public function destroyStack(int $id): JsonResponse;
}