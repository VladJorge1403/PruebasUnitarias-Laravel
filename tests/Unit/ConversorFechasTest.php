<?php

namespace Tests\Unit\Services;

use App\Services\ConversorFechas;
use Tests\TestCase;

class ConversorFechasTest extends TestCase
{
    public function test_formatea_fecha_correctamente()
    {
        $conv = new ConversorFechas();
        $this->assertEquals("18/09/2025", $conv->formatear("2025-09-18"));
    }

    public function test_calcula_diferencia_de_dias()
    {
        $conv = new ConversorFechas();
        $this->assertEquals(5, $conv->diferenciaDias("2025-09-10", "2025-09-15"));
    }
}
