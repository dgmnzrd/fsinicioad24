@extends('layouts.app')
@section('content')
    <title>Agregar Paciente</title>
    <div class="animated-header text-center my-3">
        <h1>Agregar Paciente</h1>
    </div>
    <div class="container mt-4">
        <a href="{{ route('pacientes.index') }}" class="btn btn-light mb-3">Regresar</a>
        <form id="miFormulario" action="{{ route('pacientes.store') }}" method="POST" class="bg-secondary p-4 rounded">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" value="{{ old('nombre') }}">
                @error('nombre') 
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido:</label>
                <input type="text" id="apellido" name="apellido" class="form-control" value="{{ old('apellido') }}">
                @error('apellido') 
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="edad" class="form-label">Edad:</label>
                <input type="number" id="edad" name="edad" class="form-control" value="{{ old('edad') }}">
                @error('edad') 
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="sexo" class="form-label">Sexo:</label>
                <select id="sexo" name="sexo" class="form-control">
                    <option value="M" {{ old('sexo') == 'M' ? 'selected' : '' }}>Masculino</option>
                    <option value="F" {{ old('sexo') == 'F' ? 'selected' : '' }}>Femenino</option>
                </select>
                @error('sexo') 
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="direccion" class="form-label">Dirección:</label>
                <input type="text" id="direccion" name="direccion" class="form-control" value="{{ old('direccion') }}">
                @error('direccion') 
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono:</label>
                <input type="text" id="telefono" name="telefono" class="form-control" value="{{ old('telefono') }}">
                @error('telefono') 
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}">
                @error('email') 
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="diagnostico" class="form-label">Diagnóstico:</label>
                <textarea id="diagnostico" name="diagnostico" class="form-control" rows="3">{{ old('diagnostico') }}</textarea>
                @error('diagnostico') 
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection

