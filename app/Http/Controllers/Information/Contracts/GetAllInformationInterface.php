<?php

namespace App\Http\Controllers\Information\Contracts;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Information\InformationCollection;

interface GetAllInformationInterface
{
    /**
     * Genera un JSON con todos los proyectos creados
     *
     * @return InformationCollection|JsonResource
     */
    public function getAllInformations(): InformationCollection|JsonResource;
}
