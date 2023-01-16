<?php

namespace App\Concerns;

use Illuminate\Http\JsonResponse as HttpJsonResponse;

trait JsonResponses
{
    /**
     * Retorna una respuesta JSON de la creación de un registro.
     *
     * @param string $action
     * @return HttpJsonResponse
     */
    public function responseSuccess(string $action): HttpJsonResponse
    {
        return response()->json([
            'status' => 1,
            'message' => 'Se ha ' . $action . ' correctamente.'
        ], 201);
    }

    public function responseDetroyEntity(): HttpJsonResponse
    {
        return response()->json([
            'status' => 1,
            'message' => 'Se ha eliminado correctamente'
        ], 200);
    }

    /**
     * Retorna una respuesta JSON de un Entity no encontrada
     *
     * @param string $model
     * @return HttpJsonResponse
     */
    public function responseEntityNotFound(string $model): HttpJsonResponse
    {
        return response()->json([
            'status' => 0,
            'message' => $model . ' no encontrado'
        ], 422);
    }

    /**
     * Retorna una respuesta JSON indicando que hubo un problema de carga en el File.
     *
     * @return HttpJsonResponse
     */
    public function fileResponseFailed(): HttpJsonResponse
    {
        return response()->json([
            'status' => 0,
            'message' => 'Ocurrio un error. Verifica la carga de imagen.'
        ]);
    }
}
