@extends('layouts.app')

@section('content')
<div class="container">
    @include('errors.errors')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Consulta') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('reservas.store') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Fecha inicial</label>
                            <div class="col-md-6">
                                <input id="startdate" type="date" title="ejemplo 29/04/2017" class="form-control" name="startdate" value="{{ old('startdate') }}" required/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Fecha Final</label>
                            <div class="col-md-6">
                                <input id="enddate" type="date" class="form-control" title="ejemplo 01/05/2017" name="enddate" value="{{ old('enddate') }}" required/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Tipo Habitaciones</label>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select name="room_type_id" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                        @foreach($tipoHabitaciones as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    <label for="floatingSelect">Seleccione un tipo habitación</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Consulta Disponibilidad') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if (session('success'))
                <div class="col-sm-7">
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            @endif
            <div class="card">
                <div class="card-header">Listado habitaciones disponibles</div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">room_type_id</th>
                                    <th scope="col">startdate</th>
                                    <th scope="col">enddate</th>
                                    <th scope="col">num_of_rooms</th>
                                    <th scope="col">num_of_reservations</th>
                                    <th scope="col">available_rooms</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($collections as $key => $item)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $item->room_type_id }}</td>
                                        <td>{{ $item->startdate }}</td>
                                        <td>{{ $item->enddate }}</td>
                                        <td>{{ $item->num_of_rooms }}</td>
                                        <td>{{ $item->num_of_reservations }}</td>
                                        <td>{{ $item->available_rooms }}</td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
