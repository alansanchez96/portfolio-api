<?php

namespace App\Http\Controllers\Information;

use App\Models\Information;
use App\Http\Controllers\Controller;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Information\InformationResource;
use App\Http\Resources\Information\InformationCollection;
use App\Http\Controllers\Information\Contracts\GetInformationInterface;

class GetInformationController extends Controller implements GetInformationInterface
{
    /**
     * Retorna el Project Entity solicitado por ID recibido
     *
     * @param integer $id
     * @return InformationResource|JsonResource|InformationCollection
     */
    public function getInformation(int $id): InformationResource|JsonResource|InformationCollection
    {
        return InformationResource::make(Information::findOrFail($id));
    }
}
