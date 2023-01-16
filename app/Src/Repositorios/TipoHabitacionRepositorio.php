<?php
declare(strict_types=1);
namespace App\Src\Repositorios;

use App\Models\RoomsType;

class TipoHabitacionRepositorio
{
    public function all()
    {
        return RoomsType::select(
            'id',
            'name',
            'nof'
        )->get();
    }

    public function create(array $data)
    {
        return RoomsType::create($data);
    }
}
