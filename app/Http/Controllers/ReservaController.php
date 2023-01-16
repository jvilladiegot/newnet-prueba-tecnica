<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Requests\ReservaStoreRequest;
use App\Models\Reservation;
use App\Src\Aplicacion\ReservaService;
use App\Src\Repositorios\TipoHabitacionRepositorio;
use Carbon\Carbon;

class ReservaController extends Controller
{
    private ReservaService $service;
    private TipoHabitacionRepositorio $habitacionRepositorio;

    public function __construct(
        ReservaService $service,
        TipoHabitacionRepositorio $habitacionRepositorio
    )
    {
        $this->service = $service;
        $this->habitacionRepositorio = $habitacionRepositorio;
    }

    public function index(): \Illuminate\Contracts\View\View
    {
        $collections = $this->service->index();
        return view('reservas.index', compact('collections'));
    }

    public function create(): \Illuminate\Contracts\View\View
    {
        $reserva = new Reservation();
        $tipoHabitaciones = $this->habitacionRepositorio->all();
        $collections = collect([]);
        return view('reservas.create', compact('reserva', 'tipoHabitaciones', 'collections'));
    }

    public function store(ReservaStoreRequest $request): \Illuminate\Contracts\View\View
    {
        $collections = $this->service->consultaDisponibilidad((string)$request->get('startdate'), (string)$request->get('enddate'), $request->get('room_type_id'));
        $tipoHabitaciones = $this->habitacionRepositorio->all();
        return view('reservas.create', compact( 'collections', 'tipoHabitaciones'));
    }

}
