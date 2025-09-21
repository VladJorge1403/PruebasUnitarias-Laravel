<?php 
namespace App\Console\Commands;

use App\Services\ArtisanPersonalizado;
use Illuminate\Console\Command;

class CrearControlador extends Command
{
    protected $signature = 'make:controlador {nombre}';
    protected $description = 'Crea un nuevo controlador automaticamente en app/Http/Controllers';

    public function handle()
    {
        $nombre = $this->argument('nombre');
        $artesan = new ArtisanPersonalizado();

        try {
            $ruta = $artesan->crear($nombre);
            $this->info("Controlador creado en: {$ruta}");
        } catch (\InvalidArgumentException $e) {
            $this->error($e->getMessage());
            return 1;
        }
        return 0;
    }
}