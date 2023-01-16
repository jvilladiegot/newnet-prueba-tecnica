<?php
declare(strict_types=1);
namespace App\Src\Entidades;

use Illuminate\Support\Facades\Hash;

class AdministradoEntidad
{
    public function createToArray(object $requestObject): array
    {
        return array(
            'name' => self::setName($requestObject),
            'email' => self::setEmail($requestObject),
            'password' => self::setPassword($requestObject),
        );
    }

    private function setName(object $request): string
    {
        return $request->name;
    }
    private function setEmail(object $request): string
    {
        return $request->email;
    }
    private function setPassword(object $request): string
    {
        return Hash::make($request->password);
    }

}
