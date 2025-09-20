<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use App\Services\Notificador;
use Illuminate\Foundation\Testing\RefreshDatabase;

class NotificadorTest extends TestCase
{
    use RefreshDatabase;

    public function test_envia_notificacion()
    {
        $user = User::factory()->create();

        $servicio = new Notificador();
        $servicio->enviar($user, 'Mensaje de prueba');

        // Verificamos que la notificación se haya "enviado"
        $this->assertCount(1, $servicio->enviadas);
        $this->assertEquals($user->id, $servicio->enviadas[0]['user_id']);
        $this->assertEquals('Mensaje de prueba', $servicio->enviadas[0]['mensaje']);
    }
}
