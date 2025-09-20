<?php

namespace Tests\Unit\Services;

use App\Services\ValidadorFormulario;
use Illuminate\Validation\ValidationException;
use Tests\TestCase;

class ValidadorFormularioTest extends TestCase
{
    public function test_valida_datos_correctos()
    {
        $val = new ValidadorFormulario();
        $this->assertNull($val->validar([
            'name' => 'Daniel',
            'email' => 'test@example.com',
            'password' => 'secret123'
        ])); // No debe lanzar excepción
    }

    public function test_lanza_excepcion_con_datos_invalidos()
    {
        $this->expectException(ValidationException::class);
        $val = new ValidadorFormulario();
        $val->validar([
            'name'=> '',
            'email' => 'testexample.com',
            'password' => '123'
        ]); // No debe lanzar excepción
    }
}
