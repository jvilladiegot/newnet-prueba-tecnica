<?php
declare(strict_types=1);
namespace App\Src\Aplicacion;

use App\Src\Entidades\UserEntidad;
use App\Src\Repositorios\UserRepositorio;

final class UserService extends UserEntidad
{
    private UserRepositorio $repositorio;

    public function __construct(UserRepositorio $repositorio)
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
