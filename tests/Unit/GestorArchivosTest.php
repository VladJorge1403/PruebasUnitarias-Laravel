<?php

namespace Tests\Unit\Services;

use App\Services\GestorArchivos;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class GestorArchivosTest extends TestCase
{
    public function test_guarda_archivo()
    {
        Storage::fake('local');

        $gestor = new GestorArchivos();
        $gestor->guardar('test.txt', 'contenido');

        $this->assertTrue(Storage::disk('local')->exists('test.txt'));
    }

    public function test_verifica_existencia_de_archivo()
    {
        Storage::fake('local');

        $gestor = new GestorArchivos();
        $gestor->guardar('test.txt', 'contenido');

        $this->assertTrue($gestor->existe('test.txt'));
    }
}
