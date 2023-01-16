<?php
declare(strict_types=1);
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomsType extends Model
{
    protected $table = 'rooms_type';
    protected $fillable = [
        'name',
        'nof',
    ];
}
