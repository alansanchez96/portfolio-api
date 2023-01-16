<?php

namespace App\Http\Controllers\Stack;

use App\Models\Stack;
use App\Concerns\GetFile;
use Illuminate\Http\Request;
use App\Concerns\JsonResponses;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Stack\Contracts\StackUpdateInterface;

class StackUpdateController extends Controller implements StackUpdateInterface
{
    use GetFile, JsonResponses;

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
    public function updateStack(Request $request, int $id): JsonResponse
    {
        $stack = Stack::findOrFail($id);

        if (!isset($stack)) {
            return $this->responseEntityNotFound('Stack');
        }

        $file = $this->getFile($request, 'image', 'stacks');
        if (!isset($file)) {
            return $this->fileResponseFailed();
        }

        $stack->update([
            'name' => $request->name,
            'state' => $request->state,
            'image' => 'storage/' . $file
        ]);

        return $this->responseSuccess('actualizado');
    }
}
