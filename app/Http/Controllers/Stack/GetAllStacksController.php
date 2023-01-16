<?php

namespace App\Http\Controllers\Stack;

use App\Models\Stack;
use App\Http\Controllers\Controller;
use App\Http\Resources\Stack\StackCollection;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Controllers\Stack\Contracts\GetAllStacksInterface;

class GetAllStacksController extends Controller implements GetAllStacksInterface
{
    /**
     * Retorna una respusta JSON todos los registros almacenados.
     *
     * @return StackCollection|JsonResource
     */
    public function getAllStacks(): StackCollection|JsonResource
    {
        return StackCollection::make(Stack::all());
    }
}
