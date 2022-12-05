<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Http\Controllers\Controller;
use App\Http\Requests\MessageRequest;

class MessageController extends Controller
{
    public function contact(MessageRequest $request)
    {
        $message = $request->validated();

        Message::created(
            $request->only($message)
        );

        return response()->json([
            'status' => 1,
            'message' => 'Mensaje enviado'
        ]);
    }
}
