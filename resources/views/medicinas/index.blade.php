@extends( 'layouts.app' )
@section( 'content' )
    <div class="animated-header text-center my-3">
        <h1>Lista de Medicinas</h1>
    </div>
    <a href="{{ route( 'medicinas.create' ) }}" class="btn btn-light mb-3">Nueva medicina</a>
    <table class="table table-dark table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Clave</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $medicinas as $medicina )
            <tr>
                <td>{{ $medicina->MEDICINAS_ID }}</td>
                <td>{{ $medicina->CLAVE }}</td>
                <td>{{ $medicina->NOMBRE }}</td>
                <td>{{ $medicina->PRECIO }}</td>
                <td>
                    <form action="{{ route('medicinas.destroy', $medicina->MEDICINAS_ID) }}" method="POST" class="d-inline">
                        @csrf
                        <a href="{{ route('medicinas.show', $medicina->MEDICINAS_ID) }}" class="btn btn-info btn-sm">Mostrar</a>
                        <a href="{{ route('medicinas.edit', $medicina->MEDICINAS_ID) }}" class="btn btn-warning btn-sm">Editar</a>
                        @method( 'DELETE' )
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table> 

    <div class="d-flex justify-content-center mt-3">
        {{ $medicinas->links('pagination::bootstrap-4') }}
    </div>
@endsection
