<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use App\Src\Aplicacion\UserService;

class UserController extends Controller
{
    private UserService $service;

    public function __construct(UserService $service)
    {
        $this->service = $service;
    }

    public function index(): \Illuminate\Contracts\View\View
    {
        $collections = $this->service->index();
        return view('users.index', compact('collections'));
    }

    public function create(): \Illuminate\Contracts\View\View
    {
        $user = new User();
        return view('users.create', compact('user'));
    }

    public function store(UserStoreRequest $request): \Illuminate\Http\RedirectResponse
    {
        $this->service->store((object)$request->all());
        return redirect()->route('users.index')->with('success','Usuario cliente creado exitosamente.');
    }

}
