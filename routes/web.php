<?php
declare(strict_types=1);
use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\TipoHabitacionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('users', UserController::class);
Route::resource('administradores', AdministradorController::class);
Route::resource('tipo-habitaciones', TipoHabitacionController::class);
Route::resource('reservas', ReservaController::class);
