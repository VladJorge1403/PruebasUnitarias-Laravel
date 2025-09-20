<?php

namespace App\Services;

class CalculadoraImpuestos
{

    public function calcularIVA(float $monto, float $tasa = 0.13) //Le decimos que el monto puede ser cualquier numero y que el iva es el 13%
    {
        if ($monto > 0) {
            return $monto + ($monto * $tasa);  //operacion
        }
    }
}
