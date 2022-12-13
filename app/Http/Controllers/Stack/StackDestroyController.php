<?php

namespace App\Http\Controllers\Stack;

use App\Models\Stack;
use App\Concerns\JsonResponses;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Stack\Contracts\StackDestroyInterface;

class StackDestroyController extends Controller implements StackDestroyInterface
{
    use JsonResponses;

    /**
     * Verifica que el modelo exista mediante su ID.
     * Elimina el registro.
     * Retorna una respuesta formato JSON
     *
     * @param integer $id
     * @return JsonResponse
     */
    public function destroyStack(int $id): JsonResponse
    {
        $stack = Stack::findOrFail($id);

        if (!isset($stack)) {
            return $this->fileResponseFailed();
        }

        $stack->delete();

        return $this->responseDetroyEntity();
    }
}
