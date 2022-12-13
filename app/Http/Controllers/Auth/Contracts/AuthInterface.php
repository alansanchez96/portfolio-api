<?php

namespace App\Http\Controllers\Auth\Contracts;

use Illuminate\Http\JsonResponse;
use App\Http\Requests\AuthRequest;

interface AuthInterface
{
    /**
     * Valida los datos ingresados.
     * Intenta autenticar al usuario.
     * Genera un token.
     * Retorna una respuesta en formato JSON con el token.
     *
     * @param AuthRequest $request
     * @return JsonResponse
     */
    public function login(AuthRequest $request): JsonResponse;

    /**
     * Invalida la sesión del usuario eliminando su token
     *
     * @return JsonResponse
     */
    public function logout(): JsonResponse;
}
