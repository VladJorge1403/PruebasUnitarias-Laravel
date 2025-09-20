<?php

namespace App\Services;

use App\Models\User;

class PoliticaUsuario
{
    public function puedeEliminar(User $usuario, User $target): bool
    {
        return $usuario->is_admin || $usuario->id === $target->id;
    }
}
