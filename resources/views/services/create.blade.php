@extends('layouts.app')

@section('content')
    <div class="container">


        <h1>reservar un servicio</h1>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('services.store') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-row mt-3">
                            <label class="form-label"> Tipo de servicio</label>
                            <select class="custom-select" name="name" required>
                                <option value="" selected>Selecciona una opcion ... </option>
                                <option {{ old('name') }} value="corte">corte </option>
                                <option {{ old('name') }} value="manicure">manicure </option>

                            </select>
                        </div>
                        <div class="form-row mt-3">
                            <label class="form-label"> Tipo de consulta</label>
                            <select class="custom-select" name="service_type" required>
                                <option value="" selected>Selecciona una opcion ... </option>
                                <option {{ old('service_type') }} value="Basic">Basica </option>
                                <option {{ old('service_type') }} value="Advanced">Especializada </option>

                            </select>
                        </div>
                        <div class="form-row mt-3">
                            <label class="form-label"> Fecha</label>
                            <input required type="date" name="start_date" value="{{ old('start_date') }}">
                        </div>
                        <div class="form-row mt-3">

                            <label class="form-label"> Fecha fin</label>
                            <input required type="date" name="end_date" value="{{ old('end_date') }}">
                        </div>
                        <div class="form-row mt-3">
                            <textarea placeholder="comentarios" name="observations" cols="50" rows="4"></textarea>
                        </div>

                        {{-- <input class="form-control" type="datetime-local" name="date" value="{{ old('date') }}"
                    required> --}}
                        <div class="form-row mt-3">
                            <button class="btn btn-success" type="submit">Reservar </button>

                        </div>
                    </div>


                </form>

            </div>
        </div>

    </div>
@endsection
