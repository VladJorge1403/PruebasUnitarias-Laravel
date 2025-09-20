<?php

namespace Tests\Unit\Services;

use App\Services\CalculadoraImpuestos;
use Tests\TestCase;

class CalculadoraImpuestosTest extends TestCase
{
    public function test_calcula_iva_correctamente()
    {
        $calc = new CalculadoraImpuestos();
        $resultado = $calc->calcularIVA(100);           //Le decimos que el monto es de 100
        $this->assertEquals(113, $resultado); // hace la operacion y la compara 100 + 13%

        $resultado = $calc->calcularIVA(10);
        $this->assertEquals(11.3, $resultado);
    }

    public function test_calcula_iva_incorrectamente() 
    {
        $calc = new CalculadoraImpuestos();
        $resultado = $calc->calcularIVA(10);
        $this->assertEquals(13, $resultado);
    }
}
