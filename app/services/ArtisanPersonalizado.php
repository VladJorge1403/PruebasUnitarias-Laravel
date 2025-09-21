<?php

namespace App\Services;

use Illuminate\Filesystem\Filesystem;
use InvalidArgumentException;

class ArtisanPersonalizado
{
    protected Filesystem $filesystem;

    public function __construct()
    {
        $this->filesystem = new Filesystem();
    }

    /* 
    * Genera un nuevo controlador en app/Http/Controllers
    *
    * @param string $nombreControlador Nombre del controlador a crear
    * @return string Ruta del archivo creado
    */

    public function crear(string $nombre)
    {
        if (empty($nombre)) {
            throw new InvalidArgumentException("El nombre del controlador no puede estar vacío.");
        }
        $ruta = app_path("Http/Controllers/{$nombre}.php");
        $contenido = "<?php\n\nnamespace App\Http\Controllers;\n\nuse Illuminate\Http\Request;\n\nclass {$nombre} extends Controller\n{\n    //\n}\n";

        $this->filesystem->put($ruta, $contenido);
        return $ruta;
    }
}
