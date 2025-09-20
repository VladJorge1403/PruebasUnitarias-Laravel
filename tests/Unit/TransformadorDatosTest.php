<?php

namespace Tests\Unit\Services;

use App\Services\TransformadorDatos;
use Tests\TestCase;

class TransformadorDatosTest extends TestCase
{
    public function test_convierte_array_a_json()
    {
        $trans = new TransformadorDatos();
        $this->assertEquals('{"nombre":"Diego"}', $trans->aJson(['nombre' => 'Diego']));
    }

    public function test_limpia_texto_con_caracteres_especiales()
    {
        $trans = new TransformadorDatos();
        $this->assertEquals("Hola Mundo 123", $trans->limpiarTexto("Hola@ Mundo! 123"));
    }
}
