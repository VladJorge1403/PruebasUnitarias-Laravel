<?php

namespace Tests\Unit\Services;

use Tests\TestCase;

class GenerarReporteTest extends TestCase
{
    public function test_comando_artisan_se_ejecuta_correctamente()
    {
        $this->artisan('reporte:generar')
            ->expectsOutput("Reporte generado con éxito")
            ->assertExitCode(0);
    }
}
