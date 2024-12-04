@extends('layouts.app')
@section('content')
<title>Agregar Cita</title>
    <div class="animated-header text-center my-3">
        <h1>Agregar Cita</h1>
    </div>
    <div class="container mt-4">
        <a href="{{ route('citas.index') }}" class="btn btn-light mb-3">Regresar</a>
        <form id="miFormulario" action="{{ route('citas.store') }}" method="POST" class="bg-secondary p-4 rounded">
            @csrf
            <div class="mb-3">
                <label for="id_paciente" class="form-label">Paciente:</label>
                <select id="id_paciente" name="id_paciente" class="form-control">
                    @foreach ($pacientes as $paciente)
                        <option value="{{ $paciente->id }}">{{ $paciente->nombre }} {{ $paciente->apellido }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="id_doctor" class="form-label">Doctor:</label>
                <select id="id_doctor" name="id_doctor" class="form-control">
                    @foreach ($doctores as $doctor)
                        <option value="{{ $doctor->id }}">{{ $doctor->nombre }} {{ $doctor->apellido }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha:</label>
                <input type="date" id="fecha" name="fecha" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="hora" class="form-label">Hora:</label>
                <input type="time" id="hora" name="hora" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Cita</button>
        </form>
    </div>
@endsection

