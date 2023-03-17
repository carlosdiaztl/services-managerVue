@extends('layouts.app')

@section('content')
    <div class="container">
        {{-- @dump($services) --}}
        <h1>reservas index</h1>
        @empty(!$services)
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">servicio</th>
                        <th scope="col">tipo</th>
                        <th scope="col">Fecha inicio</th>
                        <th scope="col">Fecha fin</th>
                        <th scope="col">obervaciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $service)
                        <tr>
                            <th scope="row">{{ $service->id }}</th>
                            <td>{{ $service->name }}</td>
                            <td>{{ $service->service_type }}</td>
                            <td>{{ $service->start_date }}</td>
                            <td>{{ $service->end_date }}</td>
                            <td>{{ $service->observations }}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <h1>Sin servicios</h1>
            <a href="{{ route('services.create') }}" class="btn btn-primary">Reservar un servicio </a>
        @endempty

    </div>

@endsection
