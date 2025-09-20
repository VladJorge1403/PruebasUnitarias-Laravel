<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GenerarReporte extends Command
{
    protected $signature = 'reporte:generar';
    protected $description = 'Genera un reporte de prueba';

    public function handle(): int
    {
        $this->info("Reporte generado con éxito");
        return 0;
    }
}
