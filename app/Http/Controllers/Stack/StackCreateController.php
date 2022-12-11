<?php

namespace App\Http\Controllers\Stack;

use App\Models\Stack;
use App\Concerns\GetFile;
use App\Concerns\JsonResponses;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\StackRequest;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Stack\Contracts\StackCreateInterface;

class StackCreateController extends Controller implements StackCreateInterface
{
    use GetFile, JsonResponses;

    /**
     * Valida los datos recibidos.
     * Valida que exista una imagen.
     * Almacena la solicitud en DB.
     * Y retorna respuesta JSON.
     *
     * @param StackRequest $request
     * @return JsonResponse
     */
    public function createStack(StackRequest $request): JsonResponse
    {

        $file = $this->getFile($request, 'image', 'stacks');

        if (!isset($file)) {
            return $this->fileResponseFailed();
        }

        Stack::create([
            'name' => $request->name,
            'state' => $request->state,
            'image' => 'storage/' . $file
        ]);

        return $this->responseSuccess('creado');
    }
}
