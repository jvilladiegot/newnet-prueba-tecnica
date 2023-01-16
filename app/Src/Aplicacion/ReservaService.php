<?php
declare(strict_types=1);
namespace App\Src\Aplicacion;

use App\Src\Entidades\ReservaEntidad;
use App\Src\Repositorios\ReservaRepositorio;

final class ReservaService extends ReservaEntidad
{
    private ReservaRepositorio $repositorio;

    public function __construct(ReservaRepositorio $repositorio)
    {
        $this->repositorio = $repositorio;
    }

    public function index(): \Illuminate\Support\Collection
    {
        return $this->repositorio->all();
    }

    public function consultaDisponibilidad(string $startdate, string $enddate, string|int $room_type_id)
    {
        return $this->repositorio->consultaDisponibilidad($startdate, $enddate,$room_type_id);
    }
}
