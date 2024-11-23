@extends( 'layouts.app' )
@section( 'content' )
<title>Lista de Doctores</title>
    <div class="animated-header text-center my-3">
        <h1>Lista de Doctores</h1>
    </div>
    <a href="{{ route('doctores.create') }}" class="btn btn-light mb-3">Nuevo doctor</a>
    <table class="table table-dark table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Especialidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($doctores as $doctor)
            <tr>
                <td>{{ $doctor->id }}</td>
                <td>{{ $doctor->nombre }}</td>
                <td>{{ $doctor->apellido }}</td>
                <td>{{ $doctor->especialidad }}</td>
                <td>
                    <form action="{{ route('doctores.destroy', $doctor->id) }}" method="POST" class="d-inline">
                        @csrf
                        <a href="{{ route('doctores.show', $doctor->id) }}" class="btn btn-info btn-sm">Mostrar</a>
                        <a href="{{ route('doctores.edit', $doctor->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-center mt-3">
        {{ $doctores->links('pagination::bootstrap-4') }}
    </div>
@endsection
