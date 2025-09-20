<?php

namespace Tests\Unit\Services;

use App\Models\User;
use App\Services\PoliticaUsuario;
use Tests\TestCase;

class PoliticaUsuarioTest extends TestCase
{
    public function test_admin_puede_eliminar_a_cualquiera()
    {
        $admin = new User(['id' => 1, 'is_admin' => true]);
        $otro = new User(['id' => 2]);

        $pol = new PoliticaUsuario();
        $this->assertTrue($pol->puedeEliminar($admin, $otro));
    }

    public function test_usuario_solo_puede_eliminarse_a_si_mismo()
    {
        $user = new User(['id' => 1, 'is_admin' => false]);

        $pol = new PoliticaUsuario();
        $this->assertTrue($pol->puedeEliminar($user, $user));
    }
}
