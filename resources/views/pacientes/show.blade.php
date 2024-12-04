@extends('layouts.app')

@section('content')
    <title>Info del Paciente</title>
    <div class="animated-header text-center my-3">
        <h1>Info del Paciente</h1>
    </div>
    <div class="container mt-4">
        <a href="{{ route('pacientes.index') }}" class="btn btn-light mb-3">Regresar</a>
        <div class="card bg-secondary text-white">
            <div class="card-body">
                <p><strong>Nombre:</strong> {{$paciente->nombre}}</p>
                <p><strong>Apellido:</strong> {{$paciente->apellido}}</p>
                <p><strong>Edad:</strong> {{$paciente->edad}}</p>
                <p><strong>Sexo:</strong> {{$paciente->sexo}}</p>
                <p><strong>Dirección:</strong> {{$paciente->direccion}}</p>
                <p><strong>Teléfono:</strong> {{$paciente->telefono}}</p>
                <p><strong>Email:</strong> {{$paciente->email}}</p>
                <p><strong>Diagnóstico:</strong> {{$paciente->diagnostico}}</p>
            </div>
        </div>
    </div>
@endsection

