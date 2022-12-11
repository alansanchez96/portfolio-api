<?php

namespace App\Concerns;

trait GetFile
{
    /**
     * Verifica que exista un File.
     * Retorna como respuesta un Json notificando error.
     * En caso de que exista crea la carpeta y almacena el file en dicha carpeta y retorna un array.
     *
     * @param mixed $request
     * @param string $inputFile
     * @param string $path
     * @return void
     */
    public function getFile(mixed $request, string $inputFile, string $path)
    {
        if ($request->hasFile($inputFile)) {
            return $request->file($inputFile)->store($path);
        }
    }
}
