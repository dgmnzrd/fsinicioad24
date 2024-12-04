@extends('layouts.app')
@section('content')
<title>Lista de Citas</title>
    <div class="animated-header text-center my-3">
        <h1>Lista de Citas</h1>
    </div>
    <a href="{{ route('citas.create') }}" class="btn btn-light mb-3">Nueva Cita</a>
    <table class="table table-dark table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Paciente</th>
                <th>Doctor</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($citas as $cita)
            <tr>
                <td>{{ $cita->id }}</td>
                <td>{{ $cita->paciente->nombre }} {{ $cita->paciente->apellido }}</td>
                <td>{{ $cita->doctor->nombre }} {{ $cita->doctor->apellido }}</td>
                <td>{{ $cita->fecha }}</td>
                <td>{{ $cita->hora }}</td>
                <td>
                    <form action="{{ route('citas.destroy', $cita->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('citas.show', $cita->id) }}" class="btn btn-info btn-sm">Mostrar</a>
                        <a href="{{ route('citas.edit', $cita->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-center mt-3">
        {{ $citas->links('pagination::bootstrap-4') }}
    </div>
@endsection


