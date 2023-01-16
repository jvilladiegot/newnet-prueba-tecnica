<?php
declare(strict_types=1);
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    protected $table = 'administradores';
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
