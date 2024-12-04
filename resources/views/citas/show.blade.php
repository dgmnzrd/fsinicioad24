@extends('layouts.app')
@section('content')
<title>Info de la Cita</title>
    <div class="animated-header text-center my-3">
        <h1>Información de la Cita</h1>
    </div>
    <div class="container mt-4">
        <a href="{{ route('citas.index') }}" class="btn btn-light mb-3">Regresar</a>
        <div class="card bg-secondary text-white">
            <div class="card-body">
                <p><strong>Paciente:</strong> {{ $cita->paciente->nombre }} {{ $cita->paciente->apellido }}</p>
                <p><strong>Doctor:</strong> {{ $cita->doctor->nombre }} {{ $cita->doctor->apellido }}</p>
                <p><strong>Fecha:</strong> {{ $cita->fecha }}</p>
                <p><strong>Hora:</strong> {{ $cita->hora }}</p>
            </div>
        </div>
    </div>
@endsection


