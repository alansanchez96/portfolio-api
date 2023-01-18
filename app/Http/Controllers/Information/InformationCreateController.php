<?php
namespace App\Http\Controllers\Information;

use App\Models\Information;
use App\Concerns\JsonResponses;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\InformationRequest;
use App\Http\Controllers\Information\Contracts\InformateCreateInterface;

class InformationCreateController extends Controller implements InformateCreateInterface
{
    use JsonResponses;
    
    /**
     * Valida los datos recibidos.
     * Almacena la solicitud en DB.
     * Y retorna respuesta JSON.
     *
     * @param InformationRequest $request
     * @return JsonResponse
     */
    public function createInformation(InformationRequest $request): JsonResponse
    {
        Information::create([
            'url_pdf' => $request->url_pdf
        ]);

        return $this->responseSuccess('creado');
    }
}