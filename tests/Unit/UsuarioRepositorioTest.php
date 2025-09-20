<?php

namespace Tests\Unit\Services;

use App\Models\User;
use App\Services\UsuarioRepositorio;
use Tests\TestCase;

class UsuarioRepositorioTest extends TestCase
{
    public function test_buscar_usuario_por_email()
    {
        $user = User::factory()->create(
            ['email'=> 'correo123@gmail.com'],
        );
        $repo = new UsuarioRepositorio();

        $encontrado = $repo->buscarPorEmail('correo123@gmail.com');
        $this->assertEquals($user->id, $encontrado->id);
    }
}
