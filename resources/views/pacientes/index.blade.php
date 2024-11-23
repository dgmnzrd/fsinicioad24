@extends( 'layouts.app' )
@section( 'content' )
    <div class="animated-header text-center my-3">
        <h1>Lista de Pacientes</h1>
    </div>
    <a href="{{ route( 'pacientes.create' ) }}" class="btn btn-light mb-3">Nuevo paciente</a>
    <table class="table table-dark table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th>Sexo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $pacientes as $paciente )
            <tr>
                <td>{{ $paciente->id }}</td>
                <td>{{ $paciente->nombre }}</td>
                <td>{{ $paciente->apellido }}</td>
                <td>{{ $paciente->edad }}</td>
                <td>{{ $paciente->sexo }}</td>
                <td>
                    <form action="{{ route('pacientes.destroy', $paciente->id) }}" method="POST" class="d-inline">
                        @csrf
                        <a href="{{ route('pacientes.show', $paciente->id) }}" class="btn btn-info btn-sm">Mostrar</a>
                        <a href="{{ route('pacientes.edit', $paciente->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        @method( 'DELETE' )
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center mt-3">
        {{ $pacientes->links('pagination::bootstrap-4') }}
    </div>
@endsection
