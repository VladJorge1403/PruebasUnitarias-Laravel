<?php

namespace App\Services;

class CalculadoraEstadisticas
{
    public function promedio(array $valores): float
    {
        return array_sum($valores) / count($valores);
    }

    public function maximo(array $valores): float
    {
        return max($valores);
    }
}
