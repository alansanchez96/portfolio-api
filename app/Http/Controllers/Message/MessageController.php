<?php

namespace App\Http\Controllers\Message;

use App\Models\Message;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\MessageRequest;

class MessageController extends Controller
{
    /**
     * Recibe el mensaje de los usuarios invitados y los almacena en base de datos
     * Y retorna una respuesta en formato JSON
     *
     * @param MessageRequest $request
     * @return JsonResponse
     */
    public function contact(MessageRequest $request): JsonResponse
    {
        Message::create(
            $request->only(
                'name',
                'email',
                'message'
            )
        );

        return response()->json([
            'status' => 1,
            'message' => 'Mensaje enviado'
        ], 200);
    }
}
