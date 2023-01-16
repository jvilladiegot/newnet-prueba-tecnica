<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Requests\TipoHabitacionStoreRequest;
use App\Models\RoomsType;
use App\Src\Aplicacion\TipoHabitacionService;

class TipoHabitacionController extends Controller
{

    private TipoHabitacionService $service;

    public function __construct(TipoHabitacionService $service)
    {
        $this->service = $service;
    }

    public function index(): \Illuminate\Contracts\View\View
    {
        $collections = $this->service->index();
        return view('tipo-habitaciones.index', compact('collections'));
    }

    public function create(): \Illuminate\Contracts\View\View
    {
        $roomType = new RoomsType();
        return view('tipo-habitaciones.create', compact('roomType'));
    }

    public function store(TipoHabitacionStoreRequest $request): \Illuminate\Http\RedirectResponse
    {
        $this->service->store((object)$request->all());
        return redirect()->route('tipo-habitaciones.index')->with('success','Tipo Habitacion creado exitosamente.');
    }

}
