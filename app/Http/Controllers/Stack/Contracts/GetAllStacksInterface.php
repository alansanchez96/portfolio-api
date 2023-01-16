<?php

namespace App\Http\Controllers\Stack\Contracts;

use App\Http\Resources\Stack\StackCollection;
use Illuminate\Http\Resources\Json\JsonResource;

interface GetAllStacksInterface
{
    /**
     * Retorna una respusta JSON todos los registros almacenados.
     *
     * @return StackCollection|JsonResource
     */
    public function getAllStacks(): StackCollection|JsonResource;
}
