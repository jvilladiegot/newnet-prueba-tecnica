<?php
declare(strict_types=1);
namespace App\Src\Entidades;

class ReservaEntidad
{
    public function createToArray(object $requestObject): array
    {
        return array(
            'room_type_id' => self::setRoomtype($requestObject),
            'startdate' => self::setStartdate($requestObject),
            'enddate' => self::setenddate($requestObject),
            'admin_id' => self::setAdminid($requestObject),
        );
    }

    private function setRoomtype(object $request): string
    {
        return $request->room_type_id;
    }
    private function setStartdate(object $request): string
    {
        return $request->startdate;
    }
    private function setenddate(object $request): string
    {
        return $request->enddate;
    }
    private function setAdminid(object $request): int
    {
        return (int)$request->admin_id;
    }
}
