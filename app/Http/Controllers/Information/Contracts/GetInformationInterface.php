<?php
namespace App\Http\Controllers\Information\Contracts;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Information\InformationResource;
use App\Http\Resources\Information\InformationCollection;

interface GetInformationInterface
{
    /**
     * Retorna el Project Entity solicitado por ID recibido
     *
     * @param integer $id
     * @return InformationResource|JsonResource|InformationCollection
     */
    public function getInformation(int $id): InformationResource|JsonResource|InformationCollection;
}