<?php
declare(strict_types=1);
namespace App\Src\Aplicacion;

use App\Src\Entidades\AdministradoEntidad;
use App\Src\Repositorios\AdministradoRepositorio;

final class AdministradorService extends AdministradoEntidad
{
    private AdministradoRepositorio $repositorio;

    public function __construct(AdministradoRepositorio $repositorio)
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
