<?php

namespace Tests\Unit\Services;

use App\Services\ArtisanPersonalizado;
use Illuminate\Filesystem\Filesystem;
use InvalidArgumentException;
use Tests\TestCase;

class ArtisanPersonalizadoTest extends TestCase
{
    public function test_crea_controlador_correctamente()
    {
        $artesan = new ArtisanPersonalizado();
        $nombre = 'TestController';
        $ruta = $artesan->crear($nombre);
        $this->assertFileExists($ruta);
        unlink($ruta); // Limpiar después de la prueba
    }

    public function test_lanza_excepcion_si_nombre_vacio()
    {
        $this->expectException(InvalidArgumentException::class);
        $artesan = new ArtisanPersonalizado();
        $artesan->crear('');
    }
}
