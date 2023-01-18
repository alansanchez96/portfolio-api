<?php

namespace App\Http\Controllers\Information;

use App\Models\Information;
use App\Concerns\JsonResponses;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\InformationRequest;
use App\Http\Controllers\Information\Contracts\InformationUpdateInterface;

class InformationUpdateController extends Controller implements InformationUpdateInterface
{
    use JsonResponses;

    /**
     * Verifica que Information Entity exista mediante su ID.
     * Actualiza el Entity asignado por ID.
     * Retorna una respuesta en formato JSON.
     *
     * @param InformationRequest $request
     * @param integer $id
     * @return JsonResponse
     */
    public function updateInformation(InformationRequest $request, int $id): JsonResponse
    {
        $information = Information::findOrFail($id);

        $information->update([
            'url_pdf' => $request->url_pdf
        ]);

        return $this->responseSuccess('actualizado');
    }
}
