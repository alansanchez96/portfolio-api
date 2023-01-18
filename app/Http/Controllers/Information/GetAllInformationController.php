<?php

namespace App\Http\Controllers\Information;

use App\Models\Information;
use App\Http\Controllers\Controller;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Information\InformationCollection;
use App\Http\Controllers\Information\Contracts\GetAllInformationInterface;

class GetAllInformationController extends Controller implements GetAllInformationInterface
{
    /**
     * Genera un JSON con todos los proyectos creados
     *
     * @return InformationCollection|JsonResource
     */
    public function getAllInformations(): InformationCollection|JsonResource
    {
        return InformationCollection::make(Information::all());
    }
}
