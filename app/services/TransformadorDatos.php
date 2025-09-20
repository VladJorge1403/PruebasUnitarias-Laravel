<?php

namespace App\Services;

class TransformadorDatos
{
    public function aJson(array $data): string
    {
        return json_encode($data);
    }

    public function limpiarTexto(string $texto): string
    {
        return preg_replace('/[^A-Za-z0-9 ]/', '', $texto);
    }
}
