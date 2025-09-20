<?php

namespace App\Services;

use App\Models\User;

class UsuarioRepositorio
{
    public function buscarPorEmail(string $email): ?User
    {
        return User::where('email', $email)->first();
    }
}
