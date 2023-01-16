<?php
declare(strict_types=1);
namespace App\Src\Aplicacion;

use App\Src\Entidades\TipoHabitacionEntidad;
use App\Src\Repositorios\TipoHabitacionRepositorio;

final class TipoHabitacionService extends TipoHabitacionEntidad
{
    private TipoHabitacionRepositorio $repositorio;

    public function __construct(TipoHabitacionRepositorio $repositorio)
    {
        $this->repositorio = $repositorio;
    }

    public function index()
    {
        return $this->repositorio->all();
    }

    public function store(object $requestObject)
    {
        return $this->repositorio->create($this->createToArray($requestObject));
    }
}
