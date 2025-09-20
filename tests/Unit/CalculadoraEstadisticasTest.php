<?php

namespace Tests\Unit\Services;

use App\Services\CalculadoraEstadisticas;
use Tests\TestCase;

class CalculadoraEstadisticasTest extends TestCase
{
    public function test_calcula_promedio()
    {
        $calc = new CalculadoraEstadisticas();
        $this->assertEquals(5, $calc->promedio([4, 5, 6]));
    }

    public function test_encuentra_maximo()
    {
        $calc = new CalculadoraEstadisticas();
        $this->assertEquals(10, $calc->maximo([1, 5, 10]));
    }
}
