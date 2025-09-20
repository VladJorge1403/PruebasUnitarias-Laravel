<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class GestorArchivos
{
    public function guardar(string $ruta, string $contenido): void
    {
        Storage::disk('local')->put($ruta, $contenido);
    }

    public function existe(string $ruta): bool
    {
        return Storage::disk('local')->exists($ruta);
    }
}
