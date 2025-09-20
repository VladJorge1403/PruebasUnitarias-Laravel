<?php

namespace App\Services;

use App\Models\User;

class Notificador
{
    /**
     * Envía una "notificación" al usuario.
     * Para tests, guardamos el mensaje en un array interno.
     */
    public array $enviadas = [];

    public function enviar(User $user, string $mensaje): void
    {
        // Simulamos el envío guardando en el array
        $this->enviadas[] = [
            'user_id' => $user->id,
            'mensaje' => $mensaje,
        ];
    }
}
