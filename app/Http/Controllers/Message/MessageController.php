<?php

namespace App\Http\Controllers\Message;

use App\Models\Message;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\MessageRequest;
use App\Http\Resources\Message\MessageResource;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Message\MessageCollection;

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
        ], 201);
    }

    /**
     * Envia una respuesta con todos los datos de Message Model registrados en formato JSON.
     *
     * @return MessageCollection|JsonResource
     */
    public function getAllMessages(): MessageCollection|JsonResource
    {
        return MessageCollection::make(Message::all());
    }

    /**
     * Envia una respuesta con el Message Entity obtenido por ID atraves de un JSON.
     *
     * @param integer $id
     * @return MessageResource|JsonResource|MessageCollection
     */
    public function getMessage(int $id): MessageResource|JsonResource|MessageCollection
    {
        return MessageResource::make(Message::findOrFail($id));
    }
}
