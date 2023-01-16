<?php

namespace App\Http\Controllers\Stack;

use App\Models\Stack;
use App\Http\Controllers\Controller;
use App\Http\Resources\Stack\StackResource;
use App\Http\Resources\Stack\StackCollection;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Controllers\Stack\Contracts\GetStackInterface;

class GetStackController extends Controller implements GetStackInterface
{
    /**
     * Retorna el Stack Entity solicitado por ID recibido
     *
     * @param integer $id
     * @return StackResource|JsonResource|StackCollection
     */
    public function getStack(int $id): StackResource|JsonResource|StackCollection
    {
        return StackResource::make(Stack::findOrFail($id));
    }
}
