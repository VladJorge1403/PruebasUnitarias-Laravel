<?php

namespace App\Services;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class ValidadorFormulario
{
    public function validar(array $data): void
    {
        $validator = Validator::make($data, [
            
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
    }
}
