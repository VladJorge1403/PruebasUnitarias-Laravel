<?php

namespace App\Services;

use Carbon\Carbon;

class ConversorFechas
{
    public function formatear(string $fecha, string $formato = 'd/m/Y'): string
    {
        return Carbon::parse($fecha)->format($formato);
    }

    public function diferenciaDias(string $fecha1, string $fecha2): int
    {
        return Carbon::parse($fecha1)->diffInDays(Carbon::parse($fecha2));
    }
}
