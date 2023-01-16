<?php

namespace App\Http\Controllers\Stack\Contracts;

use App\Http\Resources\Stack\StackResource;
use App\Http\Resources\Stack\StackCollection;
use Illuminate\Http\Resources\Json\JsonResource;

interface GetStackInterface
{
    /**
     * Retorna el Stack Entity solicitado por ID recibido
     *
     * @param integer $id
     * @return StackResource|JsonResource|StackCollection
     */
    public function getStack(int $id): StackResource|JsonResource|StackCollection;
}
