<?php
declare(strict_types=1);
namespace App\Src\Repositorios;

use App\Models\Administrador;

class AdministradoRepositorio
{
    public function all()
    {
        return Administrador::select(
            'id',
            'name',
            'email',
        )->paginate(20);
    }
    public function create(array $data)
    {
        return Administrador::create($data);
    }
}
