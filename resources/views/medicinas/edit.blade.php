@extends( 'layouts.app' )
@section( 'content' )
<title>Editar Medicina</title>
    <div class="animated-header text-center my-3">
        <h1>Editar Medicina</h1>
    </div>
    <div class="container mt-4">
        <form id="miFormulario" action="{{ route('medicinas.update', $medicina->MEDICINAS_ID) }}" method="POST" class="bg-secondary p-4 rounded">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="clave" class="form-label">Clave:</label>
                <input type="text" id="clave" name="clave" class="form-control" value="{{ $medicina->CLAVE }}">
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" value="{{ $medicina->NOMBRE }}">
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio:</label>
                <input type="text" id="precio" name="precio" class="form-control" value="{{ $medicina->PRECIO }}">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection