@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-2">
                <a href="{{ route('administradores.create') }}" type="button" class="btn btn-outline-primary">Nuevo</a>
            </div>
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
                    <div class="card-header">Listado Administradores</div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($collections as $key => $item)
                                        <tr>
                                            <th scope="row">{{ $key + 1 }}</th>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                {!! $collections->links() !!}
            </div>
        </div>
    </div>
@endsection
