<?php
declare(strict_types=1);
namespace App\Src\Repositorios;

use App\Models\User;

class UserRepositorio
{

    public function all()
    {
        return User::select(
            'id',
            'firstname',
            'lastname',
            'phonenumber',
            'birthdate',
            'email',
        )->paginate(20);
    }
    public function create(array $data)
    {
        return User::create($data);
    }
}
