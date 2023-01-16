<?php
declare(strict_types=1);
namespace App\Src\Entidades;

class TipoHabitacionEntidad
{
    public function createToArray(object $requestObject): array
    {
        return array(
            'name' => self::setName($requestObject),
            'nof' => self::setNof($requestObject),
        );
    }

    private function setName(object $request): string
    {
        return $request->name;
    }
    private function setNof(object $request): string
    {
        return $request->nof;
    }
}
