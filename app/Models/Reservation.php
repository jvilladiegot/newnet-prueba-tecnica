<?php
declare(strict_types=1);
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'reservation';
    protected $fillable = [
        'room_type_id',
        'startdate',
        'enddate',
        'admin_id',
    ];
}
