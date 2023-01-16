<?php
declare(strict_types=1);
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReservationUser extends Model
{
    protected $table = 'reservation_user';
    protected $fillable = [
        'user_id',
        'reservation_id',
    ];
}
