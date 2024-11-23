@extends( 'layouts.app' )
@section( 'content' )
<title>Lista de Especialidades</title>
    <div class="animated-header text-center my-3">
        <h1>Lista de Especialidades</h1>
    </div>
    <a href="{{ route('especialidades.create') }}" class="btn btn-light mb-3">Nueva especialidad</a>
    <table class="table table-dark table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($especialidades as $especialidad)
            <tr>
                <td>{{ $especialidad->id }}</td>
                <td>{{ $especialidad->nombre }}</td>
                <td>{{ $especialidad->descripcion }}</td>
                <td>
                    <form action="{{ route('especialidades.destroy', $especialidad->id) }}" method="POST" class="d-inline">
                        @csrf
                        <a href="{{ route('especialidades.show', $especialidad->id) }}" class="btn btn-info btn-sm">Mostrar</a>
                        <a href="{{ route('especialidades.edit', $especialidad->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table> 

    <div class="d-flex justify-content-center mt-3">
        {{ $especialidades->links('pagination::bootstrap-4') }}
    </div>
@endsection
