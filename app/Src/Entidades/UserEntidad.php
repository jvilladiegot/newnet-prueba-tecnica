<?php
declare(strict_types=1);
namespace App\Src\Entidades;

class UserEntidad
{
    public function createToArray(object $requestObject): array
    {
        return array(
            'firstname' => self::setFirstname($requestObject),
            'lastname' => self::setLastname($requestObject),
            'phonenumber' => self::setPhonenumber($requestObject),
            'birthdate' => self::setBirthdate($requestObject),
            'email' => self::setEmail($requestObject),
        );
    }

    private function setFirstname(object $request): string
    {
        return $request->firstname;
    }
    private function setLastname(object $request): string
    {
        return $request->lastname;
    }
    private function setPhonenumber(object $request): string
    {
        return $request->phonenumber;
    }
    private function setBirthdate(object $request): string
    {
        return $request->birthdate;
    }
    private function setEmail(object $request): string
    {
        return $request->email;
    }
}
