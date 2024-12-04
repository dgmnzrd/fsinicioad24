@extends('layouts.app')
@section('content')
    <title>Editar Paciente</title>
    <div class="animated-header text-center my-3">
        <h1>Editar Paciente</h1>
    </div>
    <div class="container mt-4">
        <form id="miFormulario" action="{{ route('pacientes.update', $paciente->id) }}" method="POST" class="bg-secondary p-4 rounded">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" value="{{ old('nombre', $paciente->nombre) }}">
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido:</label>
                <input type="text" id="apellido" name="apellido" class="form-control" value="{{ old('apellido', $paciente->apellido) }}">
            </div>
            <div class="mb-3">
                <label for="edad" class="form-label">Edad:</label>
                <input type="number" id="edad" name="edad" class="form-control" value="{{ old('edad', $paciente->edad) }}">
            </div>
            <div class="mb-3">
                <label for="sexo" class="form-label">Sexo:</label>
                <select id="sexo" name="sexo" class="form-control">
                    <option value="M" {{ old('sexo', $paciente->sexo) == 'M' ? 'selected' : '' }}>Masculino</option>
                    <option value="F" {{ old('sexo', $paciente->sexo) == 'F' ? 'selected' : '' }}>Femenino</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="direccion" class="form-label">Dirección:</label>
                <input type="text" id="direccion" name="direccion" class="form-control" value="{{ old('direccion', $paciente->direccion) }}">
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono:</label>
                <input type="text" id="telefono" name="telefono" class="form-control" value="{{ old('telefono', $paciente->telefono) }}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $paciente->email) }}">
            </div>
            <div class="mb-3">
                <label for="diagnostico" class="form-label">Diagnóstico:</label>
                <textarea id="diagnostico" name="diagnostico" class="form-control" rows="3">{{ old('diagnostico', $paciente->diagnostico) }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection

