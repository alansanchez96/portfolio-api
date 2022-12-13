<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\JsonResponse;
use App\Http\Requests\AuthRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\Contracts\AuthInterface;

class AuthController extends Controller implements AuthInterface
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
    public function login(AuthRequest $request): JsonResponse
    {
        $credentials = $request->validated();

        if (!Auth::attempt($credentials)) {
            return response()->json([
                'status' => 0,
                'message' => 'Credenciales incorrectas'
            ]);
        }

        $user = Auth::user();
        $token = $user->createToken('token')->plainTextToken;

        return response()->json([
            'status' => 1,
            'message' => 'Usuario Autenticado',
            'access_token' => $token
        ]);
    }

    /**
     * Invalida la sesión del usuario eliminando su token
     *
     * @return JsonResponse
     */
    public function logout(): JsonResponse
    {
        auth()->user()->tokens()->delete();
        return response()->json([
            'status' => 0,
            'message' => 'Logout exitoso'
        ]);
    }
}
