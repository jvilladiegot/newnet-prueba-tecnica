<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Requests\AdministradorStoreRequest;
use App\Models\User;
use App\Src\Aplicacion\AdministradorService;

class AdministradorController extends Controller
{
    private AdministradorService $service;

    public function __construct(AdministradorService $service)
    {
        $this->service = $service;
    }

    public function index(): \Illuminate\Contracts\View\View
    {
        $collections = $this->service->index();
        return view('administradores.index', compact('collections'));
    }

    public function create(): \Illuminate\Contracts\View\View
    {
        $user = new User();
        return view('administradores.create', compact('user'));
    }

    public function store(AdministradorStoreRequest $request): \Illuminate\Http\RedirectResponse
    {
        $this->service->store((object)$request->all());
        return redirect()->route('administradores.index')->with('success','Administrador creado exitosamente.');
    }

}
