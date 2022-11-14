<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    public function login(AuthRequest $request)
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

    public function userProfile()
    {
        return response()->json([
            'status' => 1,
            'message' => 'Acerca del perfil de Usuario',
            'data' => auth()->user()
        ]);
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();
        return response()->json([
            'status' => 0,
            'message' => 'Logout exitoso'
        ]);
    }
}
