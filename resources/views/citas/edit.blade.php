@extends('layouts.app')
@section('content')
<title>Editar Cita</title>
    <div class="animated-header text-center my-3">
        <h1>Editar Cita</h1>
    </div>
    <div class="container mt-4">
        <form id="miFormulario" action="{{ route('citas.update', $cita->id) }}" method="POST" class="bg-secondary p-4 rounded">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="id_paciente" class="form-label">Paciente:</label>
                <select id="id_paciente" name="id_paciente" class="form-control">
                    @foreach ($pacientes as $paciente)
                        <option value="{{ $paciente->id }}" {{ $paciente->id == $cita->id_paciente ? 'selected' : '' }}>
                            {{ $paciente->nombre }} {{ $paciente->apellido }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="id_doctor" class="form-label">Doctor:</label>
                <select id="id_doctor" name="id_doctor" class="form-control">
                    @foreach ($doctores as $doctor)
                        <option value="{{ $doctor->id }}" {{ $doctor->id == $cita->id_doctor ? 'selected' : '' }}>
                            {{ $doctor->nombre }} {{ $doctor->apellido }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha:</label>
                <input type="date" id="fecha" name="fecha" class="form-control" value="{{ $cita->fecha }}" required>
            </div>
            <div class="mb-3">
                <label for="hora" class="form-label">Hora:</label>
                <input type="time" id="hora" name="hora" class="form-control" value="{{ $cita->hora }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
    </div>
@endsection



