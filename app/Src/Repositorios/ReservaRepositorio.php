<?php
declare(strict_types=1);
namespace App\Src\Repositorios;

use App\Models\Reservation;
use Illuminate\Support\Facades\DB;

class ReservaRepositorio
{
    public function all(): \Illuminate\Support\Collection
    {
        return DB::table('reservation as res')
            ->select(
            'res.admin_id',
                'use.id',
                DB::raw('count(res.admin_id) as num_of_reservations'),
                'use.firstname',
                'use.lastname'
            )
            ->join('reservation_user as res_use', 'res.id', 'res_use.reservation_id')
            ->join('users as use', 'use.id','res_use.user_id')
            ->groupBy('res.admin_id', 'use.id')
            ->orderBy('res.admin_id', 'asc')
            ->orderBy('use.firstname', 'asc')
            ->get();
    }

    public function consultaDisponibilidad(string $startdate, string $enddate, string|int $room_type_id): \Illuminate\Support\Collection
    {
        return DB::table('rooms_type as room')
            ->select(
                'res.room_type_id',
                'res.startdate',
                'res.enddate',
                'room.nof as num_of_rooms',
                DB::raw('count(res.id) as num_of_reservations'),
                DB::raw('(room.nof - count(res.id)) as available_rooms')
            )
            ->leftJoin('reservation as res', 'room.id', 'res.room_type_id')
            ->where('res.room_type_id', $room_type_id)
            ->where('res.startdate', $startdate)
            ->where('res.enddate', $enddate)
            ->groupBy('room.id')
            ->get();
    }

    public function create(array $data)
    {
        return Reservation::create($data);
    }
}
